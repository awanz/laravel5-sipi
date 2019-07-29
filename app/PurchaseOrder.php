<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = "purchase_order";
    protected $fillable = ['id_purchase_order','no_purchase_order','nama_project','customer', 'nominal_purchase_order', 'status_delivery'];
    protected $primaryKey = 'id_purchase_order';
    public $timestamps = false;
}
