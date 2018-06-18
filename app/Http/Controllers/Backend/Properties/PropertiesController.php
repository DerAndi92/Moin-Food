<?php

namespace MoinFood\Http\Controllers\Backend\Properties;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\Property;
use Symfony\Component\HttpFoundation\Request;

class PropertiesController extends Controller
{

    public function index() {

        $properties = Property::orderBy('created_at', 'desc')->paginate(12);

        return view('backend.pages.properties.index', [
            'properties' => $properties
        ]);
    }

    public function create() {
        return view('backend.pages.properties.create', [

        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:properties|max:100',
        ]);

        $property = Property::create($request->all());

        return redirect()->route('admin.properties.edit', ['id' => $property]);

    }

    public function edit($id) {

        $property = Property::findOrFail($id);

        return view('backend.pages.properties.edit', [
            'property' => $property,
        ]);
    }

    public function update(Request $request, $id) {

        $property = Property::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:properties,id, '.$property->id.'|max:100',
        ]);

        $property->fill($request->all());
        $property->save();
        return redirect()->route('admin.properties.edit', ['id' => $property->id])->with('message', trans('main.messages.data-save'));

    }

    public function destroy(Request $request, $id) {

        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('admin.properties.index')->with('message', trans('main.messages.data-delete'));
    }

}