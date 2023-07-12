<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ListRestaurants;
use App\Models\RestaurantDocument;
use Illuminate\Http\Request;

class ListRestaurantController extends Controller
{
    public function index()
    {
        $response['listRestaurants']= ListRestaurants::get();
        $response['restaurantDocument'] = RestaurantDocument::first();
      
       return view('site.restaurant.list.index',$response);
    }
    public function show($title)
    {

        try {
            $response['listRestaurant'] = ListRestaurants::where('restaurantName', urldecode($title))->first();
            $response['restaurantsListGallarlery'] = ListRestaurants::with('images')->find($response['listRestaurant']->id);
          
            return view('site.restaurant.detalis.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.listRestaurants');
        }

    
    }
}
