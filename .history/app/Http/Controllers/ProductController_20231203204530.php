<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use Symfony\Component\HttpFoundation\RequestStack;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index($id = '', $slug = '')
    {
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);

        return view('products.content', [
            'title' => $product->name,
            'product' => $product,
            'products' => $productsMore
        ]);
    }

    public function search(Request $request) {
        $results = $this->productService->search($request);
        $search = $this->productService->search;

        return view('search.results', [
            'title' => 'Kết quả tìm kiếm',
            'results' => $results,
            'search' => $search,
        ]);
    }
}
