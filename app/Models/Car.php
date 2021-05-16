<?php

namespace App\Models;

use App\Models\CarDetailImage;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type_id', 'image', 'price', 'merk', 'mileage', 'color', 'variant', 'year', 'fuel', 'transmition', 'machine', 'description'];

    public function getType(){
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function getImageDetail(){
        return $this->hasMany(CarDetailImage::class, 'car_id', 'id');
    }

    /* MUTATORS */
    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
}
