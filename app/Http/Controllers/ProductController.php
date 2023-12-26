<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Http\Services\Account\AccountService;

class ProductController extends Controller
{
    protected $productService;
    protected $user;

    public function __construct(
        ProductService $productService,
        AccountService $user
    ) {
        $this->productService = $productService;
        $this->user = $user;
    }

    public function index($id = '', $slug = '')
    {
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);

        return view('products.content', [
            'title' => $product->name,
            'product' => $product,
            'products' => $productsMore,
            'user' => $this->user->show(),

        ]);
    }


    // Search
    public function search(Request $request)
    {
        $results = $this->productService->search($request);

        return view('search.results', [
            'title' => 'Kết quả tìm kiếm',
            'results' => $results,
        ]);
    }
}
