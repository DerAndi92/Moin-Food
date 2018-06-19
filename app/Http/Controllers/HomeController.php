<?php

namespace MoinFood\Http\Controllers;

use Illuminate\Http\Request;
use MoinFood\Models\Event;
use MoinFood\Models\Kitchen;
use MoinFood\Models\Place;
use MoinFood\Models\Property;
use MoinFood\Models\Restaurant;
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

    public function search(Request $request) {

        $restaurants = Restaurant::all();

        return $this->getJsonSuccess([
            'restaurants' => view('elements.restaurants',  compact('restaurants'))->render()
        ]);
    }

    public function restaurant(Request $request, $id) {

        $restaurant = Restaurant::findOrFail($id);

        return $this->getJsonSuccess(view('elements.restaurant_popup',  compact('restaurant'))->render());
    }
}
