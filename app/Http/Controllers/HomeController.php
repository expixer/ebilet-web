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
        $bookmarks = auth()->user() ? auth()->user()->bookmarks()->pluck('event_id')->toArray() : [];
        return view('pages.index', compact('events', 'bookmarks'));
    }

    public function create()
    {
        if (!auth()->user()->isMerchant()) {
            return redirect()->route('home');
        }
        return view('pages.create.create_venue_event');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }
}
