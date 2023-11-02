<?php
namespace App\Http\Services\Menu;

use App\Models\Menu;

class MenuService {

    public function create($request) {
        try {
            Menu::create([
                'title' => (string) $request->input('name'),
            ]);
        } catch () {

        }
    }
}
?>