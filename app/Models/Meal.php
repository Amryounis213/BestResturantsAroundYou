<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'description' ,
        'image' ,
        'status' ,
        'resturant_id' ,
        'category_id' ,
    ];
    public function restaurant()
    {
        return $this->belongsTo(Resturant::class , 'resturant_id' , 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }
// 
}
