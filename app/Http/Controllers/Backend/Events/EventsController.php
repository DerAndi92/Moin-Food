<?php

namespace MoinFood\Http\Controllers\Backend\Events;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\Event;

use Symfony\Component\HttpFoundation\Request;

class EventsController extends Controller
{

    public function index() {

        $events = Event::orderBy('created_at', 'desc')->paginate(12);

        return view('backend.pages.events.index', [
            'events' => $events
        ]);
    }

    public function create() {
        return view('backend.pages.events.create', [

        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:events|max:100',
        ]);

        $event = Event::create($request->all());

        return redirect()->route('admin.events.edit', ['id' => $event]);

    }

    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('backend.pages.events.edit', [
            'event' => $event,
        ]);
    }

    public function update(Request $request, $id) {

        $event = Event::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:events,id, '.$event->id.'|max:100',
        ]);

        $event->fill($request->all());
        $event->save();
        return redirect()->route('admin.events.edit', ['id' => $event->id])->with('message', trans('main.messages.data-save'));

    }

    public function destroy(Request $request, $id) {

        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('message', trans('main.messages.data-delete'));
    }

}