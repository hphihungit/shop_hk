<?php
namespace App\Http\Services\Product;
use App\Models\Product;

class ProductService {
    public function create($request) {
        try {
            Product::create([

            ]);
        } catch (\Exception $err) {

        }
    }
}
?>