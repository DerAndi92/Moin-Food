<?php

namespace MoinFood\Http\Controllers\Backend\RestaurantTypes;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\RestaurantType;
use Symfony\Component\HttpFoundation\Request;

class RestaurantTypesController extends Controller
{

    public function index() {

        $types = RestaurantType::orderBy('created_at', 'desc')->paginate(12);

        return view('backend.pages.restaurant_types.index', [
            'types' => $types
        ]);
    }

    public function create() {
        return view('backend.pages.restaurant_types.create', [

        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:restaurant_types|max:100',
        ]);

        $type = RestaurantType::create($request->all());

        return redirect()->route('admin.restaurant_types.edit', ['id' => $type]);

    }

    public function edit($id) {

        $type = RestaurantType::findOrFail($id);

        return view('backend.pages.restaurant_types.edit', [
            'type' => $type,
        ]);
    }

    public function update(Request $request, $id) {

        $type = RestaurantType::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:restaurant_types,id, '.$type->id.'|max:100',
        ]);

        $type->fill($request->all());
        $type->save();
        return redirect()->route('admin.restaurant_types.edit', ['id' => $type->id])->with('message', trans('main.messages.data-save'));

    }

    public function destroy(Request $request, $id) {

        $type = RestaurantType::findOrFail($id);
        $type->delete();

        return redirect()->route('admin.restaurant_types.index')->with('message', trans('main.messages.data-delete'));
    }

}