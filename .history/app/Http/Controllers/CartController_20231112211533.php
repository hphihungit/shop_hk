<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService) {

    }

    public function index() {

    }
}