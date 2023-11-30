<?php


namespace App\Http\Services;


use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class CartService
{
    public function create($request)
    {
        $qty = (int)$request->input('num_product');
        $product_id = (int)$request->input('product_id');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc Sản phẩm không chính xác');
            return false;
        }

        $carts = Session::get('carts');
        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $qty
            ]);
            return true;
        }

        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $qty;
            Session::put('carts', $carts);
            return true;
        }

        $carts[$product_id] = $qty;
        Session::put('carts', $carts);

        return true;
    }

    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();
    }

    public function update($request)
    {
        Session::put('carts', $request->input('num_product'));

        return true;
    }

    public function remove($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);

        Session::put('carts', $carts);
        return true;
    }

    public function addCart($request)
    {
        try {
            DB::beginTransaction();
            // Lấy thông tin giỏ hàng từ Session.
            $carts = Session::get('carts');

            if (is_null($carts))
                return false;
            // tạo mới khách hàng
            $customer = Customer::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'content' => $request->input('content')
            ]);
            // chuyển tới infoProductCart
            // function này lấy thông tin sp từ giỏ hàng và chèn data vào cart
            $this->infoProductCart($carts, $customer->id);

            // Hiển thị thông báo thành công
            DB::commit();
            Session::flash('success', 'Đặt Hàng Thành Công');

            //Send Mail
            Mail::send(
                'mail.success', ['customer' => $customer],
                function($email) use ($customer){
                    $email->to($customer->email);
                    $email->subject('Cảm ơn đã lựa chọn chúng tôi');
                }
            );

            // Xóa thông tin giỏ hàng từ Session.
            Session::forget('carts');
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
            return false;
        }

        return true;
    }

    protected function infoProductCart($carts, $customer_id)
    {
        // Lấy các khóa (ID sản phẩm) từ mảng giỏ hàng.
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId) // WHERE cái ID sản phẩm nằm trong mảng $productId
            ->get();

        $data = [];
        foreach ($products as $product) {
            // Tạo một mảng dữ liệu cho mỗi sản phẩm trong giỏ hàng.
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id],
                // Giá sản phẩm (nếu có giá sale thì lấy giá sale, ngược lại lấy giá thường)
                'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
            ];
        }
        return Cart::insert($data);
    }

    public function getCustomer()
    {
        return Customer::orderByDesc('id')->paginate(15);
    }

    public function getProductForCart($customer)
    {
        // $customer->carts() -> mqh Laravel Eloquent
        return $customer->carts()->with(['product' => function ($query) {
            $query->select('id', 'name', 'thumb');
        }])->get();
    }
}
