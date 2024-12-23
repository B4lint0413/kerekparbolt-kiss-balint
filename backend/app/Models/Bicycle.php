<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    use HasFactory;
    protected $fillable = ["name", "wheel_size", "gears", "sex", "type", "manufacturer_id", "size", "color"];
}
