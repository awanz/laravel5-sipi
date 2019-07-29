<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayaran";
    protected $fillable = ['pembayaran_id','purchase_order_id','jumlah_pembayaran','tgl_pembayaran'];
    protected $primaryKey = 'pembayaran_id';
    public $timestamps = false;
}
