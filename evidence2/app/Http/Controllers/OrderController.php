<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Acción para mostrar la lista de órdenes
    public function index()
    {
        return view('orders.index');
    }
}

