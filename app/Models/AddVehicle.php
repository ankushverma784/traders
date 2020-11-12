<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddVehicle extends Model
{
    use HasFactory;
    protected $fillable = ['vehicle_no','insuranceRem_days','fitnessRem_days','permitRem_days','pollutionRem_days'];
}
