<?php
namespace App\Http\Services\Product;
use App\Models\Product;

class ProductService {
    public function create($request) {
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
                'name' => (string) $request->input('name'),
            ]);
        } catch (\Exception $err) {

        }
    }
}
?>