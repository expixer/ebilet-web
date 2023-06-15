<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use App\Models\ProductInventory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::leftJoin('products', 'event_id', 'events.id')
            ->leftJoin('product_inventories', 'product_inventories.product_id', 'products.id')
            ->groupBy('events.id');
        if (request()->filled('sort')) {

            if ($request->sort == 'price') {
                $events = $events->orderBy('product_inventories.price', 'asc');
            }
            if ($request->sort == 'date') {
                $events = $events->orderBy('events.start_date', 'desc');
            }
            if ($request->sort == 'name') {
                $events = $events->orderBy('events.name', 'asc');
            }
        }
        $events = $events->get(['events.*', \DB::raw('min(product_inventories.price) as min_price'),
            \DB::raw('count(product_inventories.id) as total_product')]);
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
