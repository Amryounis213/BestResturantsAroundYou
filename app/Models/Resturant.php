<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'image' , 'city_id' , 'status' ,'slug'];
    public function City()
    {
        return $this->belongsTo(City::class , 'city_id' , 'id');
    }


    public function Meals()
    {
        return $this->hasMany(Meal::class , 'resturant_id' , 'id');
    }
}
