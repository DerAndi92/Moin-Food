<?php

namespace MoinFood\Http\Controllers\Backend\Restaurants;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\Event;
use MoinFood\Models\Image;
use MoinFood\Models\Kitchen;
use MoinFood\Models\Place;
use MoinFood\Models\Property;
use MoinFood\Models\Restaurant;
use MoinFood\Models\RestaurantType;
use Symfony\Component\HttpFoundation\Request;

class RestaurantsController extends Controller
{

    public function index() {

        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(12);

        return view('backend.pages.restaurants.index', [
            'restaurants' => $restaurants
        ]);
    }

    public function create() {
        return view('backend.pages.restaurants.create', [

        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:restaurants|max:100',
        ]);

        $restaurant = Restaurant::create($request->all());

        return redirect()->route('admin.restaurants.edit', ['id' => $restaurant]);

    }

    public function edit($id) {

        $restaurant = Restaurant::with(['kitchens', 'restaurantType', 'events', 'place', 'properties', 'openingTimes', 'images'])->find($id);
        $kitchens = Kitchen::all();
        $restaurantTypes = RestaurantType::all();
        $properties = Property::all();
        $events = Event::all();
        $places = Place::all();
        $priceCategories = [
            1 => 'Preiswert',
            2 => 'Mittelmaß',
            3 => 'Gehoben'
        ];
        $ratings = [1,2,3];

        return view('backend.pages.restaurants.edit', [
            'restaurant' => $restaurant,
            'kitchens' => $kitchens,
            'restaurantTypes' => $restaurantTypes,
            'properties' => $properties,
            'events' => $events,
            'places' => $places,
            'priceCategories' => $priceCategories,
            'ratings' => $ratings,
        ]);
    }

    public function update(Request $request, $id) {

        $restaurant = Restaurant::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:restaurants,id, '.$restaurant->id.'|max:100',
        ]);

        $restaurant->fill($request->except(['kitchens', 'events', 'properties', 'image']));
        $restaurant->kitchens()->sync(array_values($request->get('kitchens', [])));
        $restaurant->events()->sync(array_values($request->get('events', [])));
        $restaurant->properties()->sync(array_values($request->get('properties', [])));
        $restaurant->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/content/restaurants');
            $image->move($destinationPath, $name);

            if($exists = Image::where('restaurant_id', '=', $restaurant->id)) $exists->delete();
            Image::create(['name' => $name, 'restaurant_id' => $restaurant->id]);
        }

        return redirect()->route('admin.restaurants.edit', ['id' => $restaurant->id])->with('message', trans('main.messages.data-save'));

    }

    public function destroy(Request $request, $id) {

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        return redirect()->route('admin.restaurants.index')->with('message', trans('main.messages.data-delete'));
    }

}