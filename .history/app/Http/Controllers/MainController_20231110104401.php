<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Slider\SliderService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $menu;
    protected $product;
    protected $slider;

    public function __construct(MenuService $menu, ProductService $product, SliderService $slider) {
        $this->menu = $menu;
        $this->product = $product;
        $this->slider = $slider;
    }

    public function indexUser() {
        return view('main', [
            'title' => 'Shop HK',

        ]);
    }
}
