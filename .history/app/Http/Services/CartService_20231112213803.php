<?php
namespace App\Http\Services;

class CartService {
    public function create($request) {
        $qty = (int) $request->input('num_product');
        $product_id = (int) $request->input('product_id');
    }
}
?>