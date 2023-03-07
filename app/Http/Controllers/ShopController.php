<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shop.index', [
            'products' => Product::all(),
        ]);
    }
}
