<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrder()
	{
    $products = Product::orderBy('created_at', 'DESC')->get();
    return view('orders.add', compact('products'));
	}
}
