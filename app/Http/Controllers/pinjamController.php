<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pinjamModel;
use App\Models\costumerModel;
use App\Models\mobilModel;
use App\Helpers\MyHelper;

class pinjamController extends Controller
{

    public function index(Request $request)
    {
        $q = "";
        $year = date('Y',time());
        $month = date('m',time());
        if($request->q != "") $q = $request->q;
        if($request->year != "") $year = $request->year;
        if($request->month != "") $month = $request->month;
        // if(MyHelper::isAdmin())
        // {
            $pinjam = pinjamModel::select('pinjam_module.*')
                        ->cari($q)
                        ->time($year,$month)
                        ->Where([
                            'pinjam_module.created_by' => MyHelper::id()])
                        ->orderBy('pinjam_module.created_at','desc')
                        ->paginate(5);
        // }
        // else
        // {
        //     $pinjam = pinjamModel::select('pinjam_module.*')
        //                 ->cari($q)
        //                 ->Where([
        //                     'pinjam_module.created_by' => MyHelper::id()])
        //                 ->orderBy('pinjam_module.created_at','desc')
        //                 ->paginate(5);
        // }
        return view('admin.pinjam.index',['pinjams' => $pinjam]);
    }



    public function create()
    {
        $costumers = costumerModel::orderBy('nama')
                        ->get();
        $mobils = mobilModel::Where('status','=','1')
                        ->orderBy('merk')
                        ->get();

        return view('admin.pinjam.create',[
                            'costumers' => $costumers
                            ,'mobils' => $mobils]);
    }



    public function store(Request $request)
    {
        $pinjam = new pinjamModel();
        $mobil = mobilModel::findOrFail($request->id_mobil);

        $request->merge([
                        'tanggal_pinjam'  =>  date('Y-m-d H:i:s',strtotime($request->tanggal_pinjam))]);
        $request->request->add([
                        'created_by'  =>  MyHelper::id(),
                        'created_at' => date('Y-m-d H:i:s',time()),
                        'status' => 0,
                        'total' => 0,
                        'updated_at' => date('Y-m-d H:i:s',time())]);

        if($mobil->status == 1)
        {
            $mobil->status = 0;
            $pinjam->fill($request->all());

            $mobil->save();
            $pinjam->save();

            return redirect()
                    ->route('pinjam_index')
                    ->with('success','Success added data');
        }
        else
        {
            return redirect()
                    ->route('pinjam_index')
                    ->with('error','Mobil Kosong');
        }
    }


    public function edit($id)
    {
        $pinjam = pinjamModel::findOrFail($id);
        $costumers = costumerModel::orderBy('nama')
                        ->get();
        $mobils = mobilModel::Where('status','=','1')
                        ->OrWhere('id','=',$pinjam->id_mobil)
                        ->orderBy('merk')
                        ->get();

        return view('admin.pinjam.edit',[
                        'pinjam' => $pinjam
                        ,'costumers' => $costumers
                        ,'mobils' => $mobils]);
    }



    public function update(Request $request, $id)
    {
        $pinjam = pinjamModel::findOrFail($id);
        $mobil = mobilModel::findOrFail($pinjam->id_mobil);

        $request->merge([
                    'status' => (($request->status=="on") ? 1 : 0),
                    'tanggal_pinjam' => date('Y-m-d H:i:s',strtotime($request->tanggal_pinjam)),
                    'tanggal_kembali' => date('Y-m-d H:i:s',strtotime($request->tanggal_kembali))]);
        $request->request->add([
                    'updated_at' => date('Y-m-d H:i:s',time())]);

        if( $request->status == 1) // status dikembalikan
        {
            $mobil->status = 1; // mobil tersedia
            
            if( strtotime( $request->tanggal_pinjam ) > strtotime( $request->tanggal_kembali ) )
            {
                return redirect()
                        ->route('pinjam_index')
                        ->with('error','Tanggal kembali less than tanggal pinjam');
            }
            else{
                //Counting Fee
                $lama_pinjam = (strtotime($request->tanggal_kembali)-strtotime($request->tanggal_pinjam))/(60*60);
                $total_harga = (int)$lama_pinjam*$pinjam->mobil->harga;
                $request->request->add([
                            'total' => $total_harga]);

                $pinjam->update($request->all());
                $mobil->save();
                return redirect()
                        ->route('pinjam_index')
                        ->with('success','Success updated data');
            }
        }
        else if( $request->status == 0) // status masih dipinjam
        {
            $mobil->status = 0; // Mobil masih dipinjam
            $request->merge([
                        'tanggal_kembali' => null]);
            $request->request->add([
                        'total' => 0]);
            $pinjam->update($request->all());
            $mobil->save();
            return redirect()
                    ->route('pinjam_index')
                    ->with('success','Success updated data');
        }

    }



    public function destroy($id)
    {
        $pinjam = pinjamModel::findOrFail($id);
        $pinjam->delete();

        return redirect()
                ->route('pinjam_index')
                ->with('success','Success deleted data');
    }



    public function kembali($id)
    {
        $pinjam = pinjamModel::findOrFail($id);
        $mobil = mobilModel::findOrFail($pinjam->id_mobil);

        if($pinjam->status == 1)
        {
            return redirect()
                    ->route('pinjam_index')
                    ->with('error','Pinjam already completed');
        }
        else
        {
            $pinjam->tanggal_kembali = date('Y-m-d H:i:s',time());
            if(strtotime($pinjam->tanggal_kembali) > strtotime($pinjam->tanggal_pinjam))
            {
                $pinjam->status = 1; // status dikembalikan
                $pinjam->total = (int)((strtotime($pinjam->tanggal_kembali)-strtotime($pinjam->tanggal_pinjam))/(60*60)*$pinjam->mobil->harga);
                $mobil->status = 1; // mobil tersedia

                $mobil->save();
                $pinjam->save();
                return redirect()
                        ->route('pinjam_index')
                        ->with('success','Success changed data');
            }
            else
            {
                return redirect()
                        ->route('pinjam_index')
                        ->with('error','Tanggal kembali less than tanggal pinjam');
            }
        }
    }

    /**
     * cetakAll
     * Mencetak Semua data pinjam pada bulan ini
     */
    public function cetakAll(Request $request)
    {
        $bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
        $q = "";
        $year = date('Y',time());
        $month = (int)date('m',time());
        if($request->q != "") $q = $request->q;
        if($request->year != "") $year = $request->year;
        if($request->month != "") $month = $request->month;


        $title = "Laporan pemasukan bulan ".$bulan[$month]." ".$year;
        $pinjams = pinjamModel::Where(['created_by' => MyHelper::id()])
                                    ->cari($q)
                                    ->time($year,$month)
                                    ->orderBy('pinjam_module.created_at','desc')
                                    ->get();
        $totalPendapatan = pinjamModel::Where(['created_by' => MyHelper::id()])
                                    ->cari($q)
                                    ->time($year,$month)
                                    ->select(DB::raw("sum(total) as totalPendapatan"))->get();

        $pdf = \PDF::loadview('admin.pinjam.template.layout',[
                        'title' => $title
                        ,'pinjams' => $pinjams
                        ,'totalPendapatan' => $totalPendapatan[0]->totalPendapatan])
                    ->setPaper('f4', 'landscape')
                    ->stream($title.$month.".pdf", array("Attachment" => false));
        return $pdf;
    }


    public function cetakStruct($id){
        $pinjam = pinjamModel::findOrFail($id);
        $title = "Struct_peminjaman_".str_replace(" ","_",$pinjam->costumer->nama).strtotime($pinjam->tanggal_pinjam)."_".strtotime($pinjam->tanggal_kembali);
        $pdf = \PDF::loadview('admin.pinjam.template.struct_pinjam',[
            'pinjam' => $pinjam
            ,'title' => $title])
        ->setPaper('f4', 'landscape')
        ->stream($title.".pdf", array("Attachment" => false));
        return $pdf;

        // return view('admin.pinjam.template.struct_pinjam',[
        //     "pinjam" => $pinjam
        //     ,"title" => $title
        // ]);
    }

}
