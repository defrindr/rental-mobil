<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\costumerModel;


class costumersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q="";
        if($request->q != "") $q = $request->q;
        $costumer = costumerModel::cari($q)
                        ->paginate(5);
        return view('admin.costumer.index',[
                        'costumers'=>$costumer]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $costumer = new costumerModel;
            $request->request->add([
                            'created_at'=>date('Y-m-d H:i:s',time())
                            ,'updated_at'=>date('Y-m-d H:i:s',time())]);
            $costumer->fill($request->all());
            if($costumer->save())
            {
                return redirect()
                        ->route('costumer_index')
                        ->with('success','Success costumer added data.');
            }
            else {
                return redirect()
                    ->route('costumer_index')
                    ->with('error', 'Error when adding data.');

            }
        }catch(\Exception $e)
        {
            return redirect()
                    ->route('costumer_index')
                    ->with('error','Error when adding data.');
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
        $costumer = costumerModel::findOrFail($id);
        return view('admin.costumer.show',[
                        'costumer'=>$costumer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costumer = costumerModel::findOrFail($id);
        return view('admin.costumer.edit',[
                        'costumer'=>$costumer]);
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
        try{
            $costumer = costumerModel::findOrFail($id);
            $request->request->add(['updated_at'=>date('Y-m-d H:i:s',time())]);
            $costumer->update($request->all());
            if($costumer->save())
            {
                return redirect()
                    ->route('costumer_index')
                    ->with('success', 'Success updated data.');
            }else
            {

                return redirect()
                    ->route('costumer_index')
                    ->with('error', 'Error when updating data.');
            }
            
        }catch(\Exception $e)
        {
            return redirect()
                    ->route('costumer_index')
                    ->with('error','Error when updating data.');
        }
    }


    /**
     * Generating member card with pdf format
     * 
     * @param $id
     * @return void $pdf
     */
    public function cetak($id)
    {
        $costumer = costumerModel::findOrFail($id);
        $pdf = \PDF::loadview('admin.costumer.template.kartuAnggota',[
                            'costumer'=>$costumer])
                    ->setPaper([0,0,400,310],'portrait')
                    ->stream($costumer->nama.".pdf", array("Attachment" => false));
        return $pdf;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costumer = costumerModel::findOrFail($id);
        if($costumer->delete())
        {
            return redirect()
                    ->route('costumer_index')
                    ->with('success','Success deleted costumer.');
        }
        else 
        {
            return redirect()
                ->route('costumer_index')
                ->with('success', 'Error when deleting costumer.');
        }
    }
}
