<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use App\Models\ProductInventory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::leftJoin('products', 'event_id', 'events.id')
            ->leftJoin('product_inventories', 'product_inventories.product_id', 'products.id')
            ->groupBy('events.id')
            ->get(['events.*', \DB::raw('min(product_inventories.price) as min_price')]);
        return view('pages.index', compact('events'));
    }
}
