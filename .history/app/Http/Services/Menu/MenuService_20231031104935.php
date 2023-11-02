<?php
namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;

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

            Session::flash('success', 'Tạo Danh Mục Thành Công');

        } catch (\Exception $err) {

            Session::flash('error', $err->getMessage());
            return false;

        }

        return true;
    }
}
?>