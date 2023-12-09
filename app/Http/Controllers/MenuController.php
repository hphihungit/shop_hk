<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Account\AccountService;


class MenuController extends Controller
{
    protected $menuService;
    protected $user;

    public function __construct(
        MenuService $menuService,
        AccountService $user
    ) {
        $this->menuService = $menuService;
        $this->user = $user;
    }

    public function index(Request $request, $id, $slug = '')
    {
        $menu = $this->menuService->getId($id);
        $products = $this->menuService->getProduct($menu, $request);

        return view('menu', [
            'title' => $menu->name,
            'products' => $products,
            'menu'  => $menu,
            'user' => $this->user->show(),


        ]);
    }
}
