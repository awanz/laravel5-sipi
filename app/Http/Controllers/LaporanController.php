<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
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
		$laporan = Laporan::all();
		return view('laporan/index',['laporan'=>$laporan]);
	}
 
	public function export()
	{
		return Excel::download(new LaporanExport, 'laporan.xlsx');
	}
}
