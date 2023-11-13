<?php
namespace App\Http\Services;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;

class CartService {
    public function create($request) {
        $qty = (int) $request->input('num_product');
        $product_id = (int) $request->input('product_id');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc sản phẩm không chính xác');
            return false;
        }

        $carts = Session::get('carts');
        if(is_null($carts)) {
            Session::put('$cart', [
                $product_id => $qty
            ]);

            return true;
        }

        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $qty;


        }
    }
}
?>