<?php

namespace MoinFood\Http\Controllers;

use Illuminate\Http\Request;
use MoinFood\Models\Lokal;

class HomeController extends Controller
{
    //
    public function home() {

        $lokale = Lokal::where('name', 'Miss Yang')->get();


        return view('index', ['lokale' => $lokale]);
    }
}
