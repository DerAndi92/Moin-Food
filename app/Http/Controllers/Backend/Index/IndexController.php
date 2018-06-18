<?php

namespace MoinFood\Http\Controllers\Backend\Index;

use MoinFood\Http\Controllers\Controller;
use MoinFood\Models\Restaurant;

class IndexController extends Controller
{
    public function main() {

        $restaurants = Restaurant::count();

        return view('backend.pages.index.dashboard', [
            'restaurants' => $restaurants,
        ]);
    }

}