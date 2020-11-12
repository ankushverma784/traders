<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $fillable = ['mobile', 'name','city','address','select_material','material_type','quantity_type','min_rate','max_rate'];
}
