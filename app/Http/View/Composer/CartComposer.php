<?php

namespace App\Http\View\Composer;

use App\Models\Menu;
use App\Models\Product;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartComposer
{
    protected $users;

    public function __construct()
    {
    }


    public function compose(View $view)
    {
        // Lấy giỏ hàng từ session
        $carts = Session::get('carts');
        // Neu giỏ hàng là null trả về một mảng rỗng
        if (is_null($carts)) return [];
        // Lấy danh sách id sản phẩm từ gio hàng
        $productId = array_keys($carts);
        $products =  Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            // lấy những sp có id nằm trong productId
            ->whereIn('id', $productId)
            ->get();
        // cai nay truyen vao view voi biến products
        $view->with('products', $products);
    }
}
