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

        $place = $request->get('place', false);
        $price_category = $request->get('price_category', false);
        $kitchen = $request->get('kitchen', false);
        $event = $request->get('event', false);
        $restaurant_type = $request->get('restaurant_type', false);
        $properties = $request->get('properties', []);

        // Place
        if(is_numeric($place)) {
            $restaurants = Restaurant::whereHas('place', function ($query) use ($place) {
                $query->where('zip', '=', $place);
            });
        } else {
            $restaurants = Restaurant::whereHas('place', function ($query) use ($place) {
                $query->where('name', '=', $place);
            });
        }

        // Price Category
        if($price_category ) {
            $restaurants = $restaurants->where('price_category', '=', $price_category);
        }

        // Restaurant Type
        if($restaurant_type ) {
            $restaurants = $restaurants->whereHas('restaurantType', function ($query) use ($restaurant_type) {
                $query->where('id', '=', $restaurant_type);
            });
        }

        // Kitchen
        if($kitchen) {
            $restaurants = $restaurants->whereHas('kitchens', function ($query) use ($kitchen) {
                $query->where('id', '=', $kitchen);
            });
        }

        // Event
        if($event) {
            $restaurants = $restaurants->whereHas('events', function ($query) use ($event) {
                $query->where('id', '=', $event);
            });
        }

        // Properties
        if($properties) {
            $restaurants = $restaurants->whereHas('properties', function ($query) use ($properties) {
                    $query->select(\DB::raw('count(distinct id)'))->whereIn('id', array_values($properties));
                }, '=', count($properties));
        }

        $restaurants = $restaurants->get();

        return $this->getJsonSuccess([
            'restaurants' => view('elements.restaurants',  compact('restaurants'))->render()
        ]);
    }

    public function restaurant(Request $request, $id) {

        $restaurant = Restaurant::findOrFail($id);

        return $this->getJsonSuccess(view('elements.restaurant_popup',  compact('restaurant'))->render());
    }
}
