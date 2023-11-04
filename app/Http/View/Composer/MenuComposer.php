<?php

namespace App\Http\View\Composer;

use App\Models\Menu;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class MenuComposer
{
    protected $users;

    public function __construct()
    {
    }


    public function compose(View $view)
    {
        $menus = Menu::select('id', 'name', 'parent_id')->where('active', 1)->orderByDesc('id')->get();
        $view->with('menus', $menus);
    }
}
