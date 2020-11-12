<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['mob_no', 'gst_no','customer_name','address','aadhar_no','pan_no','city','state'];
}
