<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetailImage extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'image'];

    public function getCar(){
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
