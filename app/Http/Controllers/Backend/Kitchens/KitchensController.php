<?php

namespace MoinFood\Http\Controllers\Backend\Kitchens;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\Kitchen;
use Symfony\Component\HttpFoundation\Request;

class KitchensController extends Controller
{

    public function index() {

        $kitchens = Kitchen::orderBy('created_at', 'desc')->paginate(12);

        return view('backend.pages.kitchens.index', [
            'kitchens' => $kitchens
        ]);
    }

    public function create() {
        return view('backend.pages.kitchens.create', [

        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:kitchens|max:100',
        ]);

        $kitchen = Kitchen::create($request->all());

        return redirect()->route('admin.kitchens.edit', ['id' => $kitchen]);

    }

    public function edit($id) {

        $kitchen = Kitchen::findOrFail($id);

        return view('backend.pages.kitchens.edit', [
            'kitchen' => $kitchen,
        ]);
    }

    public function update(Request $request, $id) {

        $kitchen = Kitchen::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:kitchens,id, '.$kitchen->id.'|max:100',
        ]);

        $kitchen->fill($request->all());
        $kitchen->save();
        return redirect()->route('admin.kitchens.edit', ['id' => $kitchen->id])->with('message', trans('main.messages.data-save'));

    }

    public function destroy(Request $request, $id) {

        $kitchen = Kitchen::findOrFail($id);
        $kitchen->delete();

        return redirect()->route('admin.kitchens.index')->with('message', trans('main.messages.data-delete'));
    }

}