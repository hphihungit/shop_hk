<?php
namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class MenuService {

    public function getParent() {
        return Menu::where('parent_id', 0)->get();
    }

    public function getAll() {
        return Menu::orderbyDesc('id')->paginate(20);
    }

    public function create($request) {

        try {
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active')
            ]);

            Session::flash('success', 'Tạo Danh Mục Thành Công');

        } catch (\Exception $err) {

            Session::flash('error', $err->getMessage());
            return false;

        }

        return true;
    }

    public function destroy($request) {
        $menu = Menu::where('id', $request->input('id'))->first();
    }
}
?>