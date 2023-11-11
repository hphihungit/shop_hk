<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductAdminService;
use App\Models\Product;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductAdmin $productService) {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('admin.product.list', [
            'title' => 'Danh Sách Sản Phẩm',
            'products' => $this->productService->get()
        ]);
    }

    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm Sản Phẩm Mới',
            'menus' => $this->productService->getMenu()
        ]);
    }

    public function store(ProductRequest $request)
    {
        $result = $this->productService->insert($request);

        return redirect()->back();
    }

    public function show(Product $product)
    {
        return view('admin.product.edit', [
            'title' => 'Chỉnh Sửa Danh Mục',
            'product' => $product,
            'menus' => $this->productService->getMenu()
        ]);
    }

    public function update(Product $product, Request $request) {
        $result = $this->productService->update($request, $product);

        if ($result) { 
            return redirect('admin/products/list');
        }

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->productService->delete($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa Sản Phẩm Thành Công'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
