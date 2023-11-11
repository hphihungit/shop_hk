<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $menu;
    protected $product;
    protected $slider;
    public function indexUser() {
        return view('main', [
            'title' => 'Shop HK',

        ]);
    }
}
