<?php
namespace App\Http\Services\Product;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductService {

    public function getMenu() {
        return Menu::Where
    }

    public function insert($request) {
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' => (int) $request->input('price'),
                'price_sale' => (string) $request->input('price_sale'),
                'active' => (string) $request->input('active'),
                'thumb' => (string) $request->input('thumb')
            ]);

            Session::flash('success', 'Thêm Sản Phẩm Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm Sản Phẩm Thất Bại');
        }
    }
}
?>