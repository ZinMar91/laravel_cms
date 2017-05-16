<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('home', compact('products', $products));
    }

    public function addCart(Request $request, $id) {
        $items = array();

        if ($request->session()->has('items')) {
            $items = $request->session()->get('items');
            if (!in_array($id, $items)) array_push($items, $id);
        } else {
            array_push($items, $id);
        }

        $request->session()->put('items', $items);

//        $request->session()->flush();
        $products = Product::all();
        return view('home', compact('products', $products));
    }

    public function showCart(Request $request)
    {
        if ($request->session()->has('items')) {
            $cart_items = $request->session()->get('items');
            $products = array();

            foreach ($cart_items as $item) {
                $tmp_item = Product::find($item);
                array_push($products, $tmp_item);
            }
        } else {
            $products = null;
        }

        return view('cart', compact('products', $products));
    }

    public function checkout(Request $request) {
        $request->session()->flush();
        $products = Product::all();
        return view('home', compact('products', $products));
    }
}
