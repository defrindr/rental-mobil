<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mobilModel;


class mobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $q = "";
        $jmobil = "";
        $harga = 60000;
        $status = null;

        if($request->q != "") $q = $request->q;
        if($request->jmobil != "") $jmobil = $request->jmobil;
        if($request->harga != "") $harga = $request->harga;
        if($request->status != "") $status = $request->status;


        $mobil = mobilModel::cari($q)
                    ->jmobil($jmobil)
                    ->harga($harga)
                    ->status($status)
                    ->paginate(5);
        return view('admin.mobil.index',[
                        'mobils'=>$mobil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if((int)$request->harga < 2000)
        {
            return redirect()
                    ->route('mobil_index')
                    ->with('error','Harga less than 2.000');
        }
        else
        {
            try
            {
                $this->validate($request, [
                    'image' => 'file|image|mimes:jpeg,png,jpg|max:2048']);

                $file = $request->file('image');

                $destinationPath = 'media/mobil/';
                if(!(empty($file))){
                    $fileName = $request->merk."_".str_replace(' ','_',$request->plat_nomer).".".$file->getClientOriginalExtension();

                    $file->move($destinationPath,$fileName);
                }else{
                    $fileName = "";
                }

                $mobil = new mobilModel([
                    'merk' => $request->merk
                    ,'plat_nomer' => $request->plat_nomer
                    ,'harga' => $request->harga
                    ,'image' => $fileName
                    ,'status' => 1
                    ,'created_at' => date('Y-m-d H:i:s',time())
                    ,'updated_at' => date('Y-m-d H:i:s',time())
                ]);

                if($mobil->save()) return redirect()
                                        ->route('mobil_index')
                                        ->with('success','Success created Data');
            }catch(\Exception $e)
            {
                return redirect()
                        ->route('mobil_index')
                        ->with('error','Error when created data.');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = mobilModel::findOrFail($id);
        return view('admin.mobil.show',[
                        'mobil'=>$mobil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = mobilModel::findOrFail($id);
        return view('admin.mobil.edit',[
                        'mobil'=>$mobil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mobil = mobilModel::findOrFail($id);

        $this->validate($request, [
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048']);

        $file = $request->file('image');
        $destinationPath = 'media/mobil/';

        $request->request->add([
                        'updated_at'=>date('Y-m-d H:i:s',time())]);
        try
        {
            if(!(empty($file)))
            {
            $fileName = $request->merk."_".str_replace(' ','_',$request->plat_nomer).".".$file->getClientOriginalExtension();
                if(file_exists($destinationPath.$mobil->image) and ($mobil->image != ""))
                {
                    unlink($destinationPath.$mobil->image);
                }
                $file->move($destinationPath,$fileName);
            }
            $mobil->image = $fileName;
            $mobil->merk = $request->merk;
            $mobil->plat_nomer = $request->plat_nomer;
            $mobil->harga = $request->harga;
            $mobil->updated_at = $request->updated_at;
            
            $mobil->save();

            return redirect()
                    ->route('mobil_index')
                    ->with('success','Success updated Data');
        }
        catch(\Exception $e)
        {
            return redirect()
                    ->route('mobil_index')
                    ->with('error','Error when updated Data :'.$e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = mobilModel::findOrFail($id);
        $mobil->delete();
        return redirect()
                ->route('mobil_index')
                ->with('success','Deleted Data Success');
    }

}
