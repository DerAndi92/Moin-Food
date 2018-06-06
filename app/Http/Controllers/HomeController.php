<?php

namespace MoinFood\Http\Controllers;

use Illuminate\Http\Request;
use MoinFood\Models\Kitchen;
use MoinFood\Models\Lokal;
use MoinFood\Models\Property;
use MoinFood\Models\RestaurantType;

class HomeController extends Controller
{
    //
    public function home() {

        $kitchens = Kitchen::all();
        $restaurantTypes = RestaurantType::all();
        $properties =Property::all();

        return view('index', [
            'kitchens' => $kitchens,
            'restaurantTypes' => $restaurantTypes,
            'properties' => $properties,
        ]);
    }
}
