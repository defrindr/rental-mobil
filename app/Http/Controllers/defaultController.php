<?php
namespace App\Http\Controllers;


use \App\Models\mobilModel;
use \Illuminate\Support\Facades\DB;
use App\Helpers\MyHelper;


class defaultController extends Controller
{

	public function index()
	{
		$dataMobil = mobilModel::Where(['status'=>1])
							->get();
		return view('default.layout');
	}
    public function paginate()
    {
		$mobils = mobilModel::Where('status','=','1')
					->orderBy('merk', 'ASC')
					->paginate(request('limit', 20));

        if (request()->all()) {
            $mobils->appends(request()->all());
        }

        return response()->json($mobils, 200, array(), JSON_PRETTY_PRINT);
    }

    public function view()
    {
        return view('default.view');
    }
    public function show($id)
    {
        $mobil = mobilModel::whereId($id)->first();
        if (empty($mobil)) {
            return response()->json([
                'message' => 'mobil not found.',
            ], 404);
        }

        return response()->json($mobil, 200, array(), JSON_PRETTY_PRINT);
    }
}

?>