<?php

namespace App\Http\Controllers;

use App\Http\Services\Account\AccountService;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Models\User;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    protected $user;

    public function __construct(
        SliderService $slider,
        MenuService $menu,
        ProductService $product,
        AccountService $user
    ) {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
        $this->user = $user;
    }


    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result])->render();

            return response()->json(['html' => $html]);
        }

        return response()->json(['html' => '']);
    }
}
