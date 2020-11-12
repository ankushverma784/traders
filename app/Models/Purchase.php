<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['mobile', 'bill_no','material_name','material_type','material_quantity_type','quantity','material_price','material_tax','total_price','material_gst','deliveryCharge','otherCharge','loadingCharge','payment_amount','payment_cheque',];
}