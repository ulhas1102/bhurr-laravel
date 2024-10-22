<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTypes extends Model
{
    use HasFactory;
    public $table = 'cars_type';
    public $primaryKey = 'car_type_id';
}
