<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService) {
        $this->menuService = $menuService;
    }

    public function index(Request $request, $id, $slug) {
        $menu = $this->menuService->getId($id);

        $product = $this->menuService->getProduct($menu);

        dd($menu);
    }
}
