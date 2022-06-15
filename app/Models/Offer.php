<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'image' , 'meal_id' ,'resturant_id'];
    protected $casts= ['image'];
    public function Meal()
    {
        return $this->belongsToMany(Meal::class , 'medicine_offer' , 'offer_id' , 'medicine_id');
    }

}
