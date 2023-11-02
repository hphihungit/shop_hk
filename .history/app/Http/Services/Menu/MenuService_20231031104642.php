<?php
namespace App\Http\Services\Menu;

use App\Models\Menu;

class MenuService {

    public function create($request) {
        try {
            Menu::create([
                'title' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active')
            ]);
        } catch (\Exception $err) {

        }
    }
}
?>