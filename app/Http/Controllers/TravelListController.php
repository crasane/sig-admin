<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class TravelListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getTravelList()
    {
        $TravelPackage = TravelPackage::all();

        \Log::debug("get travel list");
        \Log::debug($TravelPackage);

        return view('travel_list', ["data"  => $TravelPackage]);

    }
}
