<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticateCart
{
    public function handle($request, Closure $next)
    {
        // Kiểm tra xem người dùng có đăng nhập hay không
        if (Auth::check()) {
            return $next($request);
        }

        Session::flash('error', 'Bạn cần đăng nhập để thêm vào giỏ hàng.');

        // Nếu không đăng nhập, bạn có thể chuyển hướng hoặc xử lý theo ý muốn
        return redirect()->route('login')->with('login_required', true);
    }
}
