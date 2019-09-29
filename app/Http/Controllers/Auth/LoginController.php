<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Models\adminModel;
use App\Helpers\MyHelper;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function index()
    {
        $year = DB::select(DB::raw('select year(now()) as year'))[0]
                    ->year;
        $month = DB::select(DB::raw('select month(now()) as month'))[0]
                    ->month;

        // if(MyHelper::isAdmin())
        // {
        //     $totalPemasukan = DB::table('pinjam_module')
        //                         ->select(DB::raw('sum(total) as totalPemasukan'))
        //                         ->whereYear('tanggal_pinjam',$year)
        //                         ->WhereMonth('tanggal_pinjam',$month)
        //                         ->get();
        //     $pinjamCount = DB::table('pinjam_module')
        //                         ->whereYear('tanggal_pinjam',$year)
        //                         ->WhereMonth('tanggal_pinjam',$month)
        //                         ->count();
        // }
        // else
        // {
            $totalPemasukan = DB::table('pinjam_module')
                                ->select(DB::raw('sum(total) as totalPemasukan'))
                                ->Where([
                                    'created_by' => MyHelper::id()
                                ])
                                ->whereYear('tanggal_pinjam',$year)
                                ->WhereMonth('tanggal_pinjam',$month)
                                ->get();
            $pinjamCount = DB::table('pinjam_module')
                                ->Where([
                                    'created_by' => MyHelper::id()
                                ])
                                ->whereYear('tanggal_pinjam',$year)
                                ->WhereMonth('tanggal_pinjam',$month)
                                ->count();
        // }

        $costumerCount = DB::table('costumers_module')
                                ->count();
        $adminCount = DB::table('admin_module')
                                ->count();
        $mobilCount = DB::table('mobil_module')
                                ->count();


        $months=["January","February"
                    ,"March","April"
                    ,"May","June"
                    ,"July","August"
                    ,"September","October"
                    ,"November","December"];
        $datas = [];
        for ($i=0; $i < count($months); $i++)
        {
            $this->month = $i+1;
            // if(MyHelper::isAdmin())
            // {
            //     $perMonth = DB::table('pinjam_module')
            //                         ->whereYear('tanggal_pinjam',$year)
            //                         ->WhereMonth('tanggal_pinjam',$this->month)
            //                         ->count();
            // }
            // else
            // {
                $perMonth = DB::table('pinjam_module')
                                    ->Where(['created_by'=>MyHelper::id()])
                                    ->WhereYear('tanggal_pinjam',$year)
                                    ->WhereMonth('tanggal_pinjam',$this->month)
                                    ->count();
            // }
            array_push($datas,["month"=>$months[$i],"total"=> $perMonth]);
        }


        return view('admin.default.dashboard',[
                            'totalPemasukan' => $totalPemasukan[0]->totalPemasukan
                            ,'totalCount' => $pinjamCount
                            ,'costumerCount' => $costumerCount
                            ,"datas" => json_encode($datas,JSON_PRETTY_PRINT)
                            ,'mobilCount' => $mobilCount
                            ,'adminCount' => $adminCount]);
    }


    /* @GET
    */
    public function loginForm()
    {
        return view('auth.login');
    }

    /* @POST
    */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            ]);
        // var_dump($request->all());
        // exit();
        if (\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password])
        )
        {
            return redirect('/admin');
        }
        return view('auth.login')->with('error', 'Invalid Email address or Password');
    }
    /* GET
    */
    public function logout(Request $request)
    {
        if(\Auth::check())
        {
            \Auth::logout();
            $request->session()->invalidate();
        }
        return  redirect('/login');
    }
}
