<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OrderController extends Controller
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
    public function getOrderList()
    {
        //$Order = Order::all();
        $Order = collect(DB::select(DB::raw("SELECT 
            A.id order_id,
            travel_package_id,
            A.name order_name,
            phone,
            message,
            B.id travel_id,
            B.name travel_name
            FROM 
            orders A
            INNER JOIN travel_packages B ON A.travel_package_id = B.id")))->all();

        \Log::debug("get order");
        \Log::debug($Order);

        return view('order', ["data"  => $Order]);

    }
}
