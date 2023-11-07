<?php
namespace App\Http\Services\Product;
use App\Models\Product;

class ProductService {
    public function create($request) {
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' => (int) $request->input('price'),
                'price_sale' => (string) $request->input('price_sale'),
                'active' => (string) $request->input('active'),
                'thumb' => (string) $request->input('thumb'),
            ]);
        } catch (\Exception $err) {

        }
    }
}
?>