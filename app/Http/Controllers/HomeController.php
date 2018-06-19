<?php

namespace MoinFood\Http\Controllers;

use MoinFood\Models\Event;
use MoinFood\Models\Kitchen;
use MoinFood\Models\Place;
use MoinFood\Models\Property;
use MoinFood\Models\RestaurantType;

class HomeController extends Controller
{
    //
    public function home() {

        $kitchens = Kitchen::orderBy('name', 'asc')->get();
        $restaurantTypes = RestaurantType::orderBy('name', 'asc')->get();
        $properties =Property::orderBy('name', 'asc')->get();
        $events = Event::orderBy('name', 'asc')->get();
        $places = Place::all();

        return view('index', [
            'kitchens' => $kitchens,
            'restaurantTypes' => $restaurantTypes,
            'properties' => $properties,
            'events' => $events,
            'places' => $places,
        ]);
    }
}
