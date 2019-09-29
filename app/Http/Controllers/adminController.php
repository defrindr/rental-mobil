<?php

namespace App\Http\Controllers;

use App\Models\adminModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{

    public function index(Request $request)
    {
        $q = "";
        if(isset($request->q)) $q = $request->q;

        $user = adminModel::cari($q)->paginate(5);

        return view('admin.user.index',[
                        'users' => $user]);
    }

    public function create()
    {
        return view('admin.user.create');
    }


    public function store(Request $request)
    {
        $newUser = new adminModel;
        try{
            if(strlen($request->password) < 8)
            {
                DB::rollback();
                return redirect()
                        ->route('user_create')
                        ->with('error','Password length must greather than 8');
            }else
            {
                $request->merge(['password' => bcrypt($request->password)]);
                $request->request->add([
                            'created_at'=> date('Y-m-d H:i:s',time()),
                            'updated_at'=> date('Y-m-d H:i:s',time())]);
                $newUser->fill($request->all());
                $newUser->save();
                return redirect()
                        ->route('user_index')
                        ->with('success','Success added user');
            }
        }catch(\Exception $e)
        {
            return redirect()
                    ->route('user_index')
                    ->with('error','Something went wrong with add user.');
        }
    }

    public function show($id)
    {
        $user = adminModel::findOrFail($id);
        $countPenanganan = DB::table('pinjam_module')
                                ->Where('created_by','=',$user->id)
                                ->whereYear('tanggal_pinjam',DB::select(DB::raw('select year(now()) as year'))[0]->year)
                                ->whereMonth('tanggal_pinjam',DB::select(DB::raw('select month(now()) as month'))[0]->month)
                                ->count();
        return view('admin.user.show',[
                        'user' => $user
                        ,'countPenanganan' => $countPenanganan]);
    }


    public function edit($id)
    {
        $user = adminModel::findOrFail($id);
        return view('admin.user.edit',[
                        'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = adminModel::findOrFail($id);
        $oldPassword = $user->password;
        try
        {
            if($request->password == null)
            {
                $request->merge([
                            'password' => $oldPassword]);
            }else {
                $request->merge([
                            'password'  =>  bcrypt($request->password)]);
            }
            $request->request->add([
                            'created_at' =>  date('Y-m-d H:i:s',time())
                            ,'created_at' =>  date('Y-m-d H:i:s',time())]);
            $user->fill($request->all());

            $user->save();

            return redirect()
                    ->route('user_index')
                    ->with('success','Success updated user');
        }
        catch(\Exception $e)
        {
            return redirect()
                    ->route('user_index')
                    ->with('error','Error updated user');
        }
    }


    public function destroy($id)
    {
        $user = adminModel::findOrFail($id);
        $user->delete();
        return redirect()
                ->route('user_index')
                ->with('success','Success Deleted User');
    }
}
