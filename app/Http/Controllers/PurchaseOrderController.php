<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// call model Purchase Order
use App\PurchaseOrder;

class PurchaseOrderController extends Controller
{
    public function index()
    {
    	$PurchaseOrder = PurchaseOrder::all();
    	return view('purchase_order/index', ['PurchaseOrder' => $PurchaseOrder]);
    }

    public function tambah()
    {
    	return view('purchase_order/tambah');
    }

    public function tambah_proses(Request $request)
    {
        PurchaseOrder::create([
    		'no_purchase_order' => $request->no_purchase_order,
			'nama_project' => $request->nama_project,
			'customer' => $request->customer,
    		'nominal_purchase_order' => $request->nominal_purchase_order,
    		'status_delivery' => $request->status_delivery
    	]);
 
    	return redirect('/purchase_order');
    }

	public function hapus($id_purchase_order)
	{
	    $purchaseOrder = PurchaseOrder::find($id_purchase_order);
	    $purchaseOrder->delete();
	    return redirect('/purchase_order');
	}

	public function edit($id)
	{
	   $PurchaseOrder = PurchaseOrder::find($id);
	   return view('/purchase_order/edit', ['PurchaseOrder' => $PurchaseOrder]);
	}

	public function edit_proses($id, Request $request)
	{
		$PurchaseOrder = PurchaseOrder::find($id);
		$PurchaseOrder->no_purchase_order = $request->no_purchase_order;
		$PurchaseOrder->nama_project = $request->nama_project;
		$PurchaseOrder->customer = $request->customer;
		$PurchaseOrder->nominal_purchase_order = $request->nominal_purchase_order;
		$PurchaseOrder->status_delivery = $request->status_delivery;
		$PurchaseOrder->save();
		return redirect('/purchase_order');
	}


}
