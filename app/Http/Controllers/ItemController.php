<?php

namespace App\Http\Controllers;

use App\Models\Item;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ItemController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'store' => ['required', 'exists:stores,id'],
            'name' => ['required', 'string', 'max:32'],
            'url' => ['required', 'url']
        ]);

        Item::create([
            'name' => $data['name'],
            'url' => $data['url'],
            'store_id' => $data['store'],
            'user_id' => request()->user()->id,
            'status' => Item::setStatus($data['url'])
        ]);

        return back();
    }
    public function show(Request $request)
    {
//        $items = Cache::remember('user_items_' . auth()->user()->id, 600, function () {
//            return auth()->user()->items;
//        });
        $items = auth()->user()->items;

        return view('dashboard', [
            'items' => $items
        ]);
    }
}
