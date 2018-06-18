<?php

namespace MoinFood\Http\Controllers\Backend\Restaurants;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\Restaurant;
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

        $restaurant = Restaurant::findOrFail($id);

        return view('backend.pages.restaurants.edit', [
            'restaurant' => $restaurant,
        ]);
    }

    public function update(Request $request, $id) {

        $restaurant = Restaurant::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|unique:restaurants,id, '.$restaurant->id.'|max:100',
            'online' => 'boolean',
        ]);

        $restaurant->fill($request->all());
        $restaurant->save();
        return redirect()->route('admin.restaurants.edit', ['id' => $restaurant->id])->with('message', trans('main.messages.data-save'));

    }

    public function destroy(Request $request, $id) {

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        return redirect()->route('admin.restaurants.index')->with('message', trans('main.messages.data-delete'));
    }

}