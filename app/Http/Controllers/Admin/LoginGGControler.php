<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;


class LoginGGControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            // ng dung click vao gg
            $user = Socialite::driver('google')->user();
            // tim kiem tk da có trong database chưa(google_id)
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                // Nếu có thì login vào luôn
                Auth::login($finduser);
                return redirect()->intended('/');
            } else {
                // Kiểm tra xem email đã tồn tại chưa
                $existingUser = User::where('email', $user->email)->first();

                if ($existingUser) {
                    // Người dùng đã tồn tại, có thể thực hiện các bước khác nếu cần
                    // Ví dụ: cập nhật thông tin người dùng từ Google
                    $existingUser->name = $user->name;
                    $existingUser->google_id = $user->id;
                    // Cập nhật các trường thông tin khác nếu cần
                    $existingUser->save();

                    // Đăng nhập người dùng đã tồn tại
                    Auth::login($existingUser);

                    return redirect()->intended('/');
                } else {
                    // Người dùng không tồn tại, tạo mới
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'phone_number' => "",
                        'google_id' => $user->id,
                        'password' => bcrypt('123456dummy'), // trên 8 ký tự
                    ]);

                    // Login vào với account mới
                    Auth::login($newUser);
                }

                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
