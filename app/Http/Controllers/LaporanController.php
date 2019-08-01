<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Laporan;
// call model Purchase Order
use App\PurchaseOrder;
 
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
	{
		if(Session::get('user_level') == 3 || Session::get('user_level') == 4){
			$laporan = PurchaseOrder::all();
			return view('laporan/index',['laporan'=>$laporan]);
		}else{
			return redirect('/dashboard');
		}
	}
 
	public function export()
	{
		if(Session::get('user_level') == 3 || Session::get('user_level') == 4){
			return Excel::download(new LaporanExport, 'laporan.xlsx');
		}else{
			return redirect('/dashboard');
		}
	}
}
