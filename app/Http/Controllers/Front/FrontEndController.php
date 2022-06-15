<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Meal;
use App\Models\Resturant;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public  function ShowProductsOfResturant($id)
    {
        $resturant = Resturant::with('Meals')->where('id' , $id)->first() ;
        return view('website.resturant-product' , compact('resturant'));
    }

    public  function ShowProduct($id)
    {
        $meal = Meal::with('restaurant')->where('id' , $id)->first() ;
        return view('website.meal-details' , compact('meal'));
    }

    public  function ShowResturantsOfCity($id)
    {
        $resturant = City::find($id)->Resturant;
        return view('website.city-resturant' , compact('resturant'));
    }


    
}
