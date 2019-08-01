<?php

namespace App\Exports;

use App\Laporan;
use App\PurchaseOrder;
use DB;

use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

    //     User::selectRaw('users.name, count(*) submitted_games')
    // ->join('games', 'games.user_id', '=', 'users.id')
    // ->groupBy('users.name')
    // ->orderBy('submitted_games', 'DESC')
    // ->get();

        // $laporan = PurchaseOrder::selectRaw('no_invoice, tgl_invoice');
        $laporan = DB::table('purchase_order')->select('no_invoice as No Invoice', 'no_purchase_order as No. PO')->get();
        return $laporan;
    }
}
