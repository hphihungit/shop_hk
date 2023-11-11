<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menu;

    public function __construct(MenuService $menu) {
        $this->menu = $menu;
    }

    public function index(Request $request, $id, $slug) {
        return $this->menu->getId($id);

        dd($request->input());
    }
}
