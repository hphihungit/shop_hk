<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPassword extends Controller
{
    function forgetPassword()
    {
        return view('admin.users.mail');
    }
    function newpass()
    {
        return view('admin.users.newpass');
    }
    function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users",
        ]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        Mail::send(
            "admin.email.forget-password",
            ['token' => $token],
            function ($message) use ($request) {
                $message->to($request->email);
                $message->subject("Reset Password");
            }
        );
        return redirect()->to(route("forget.password"))->with(
            "success",
            "We have send an email to reset your password"
        );
    }
    function resetPassword($token)
    {
        return view("admin.users.newpass", compact('token'));
    }
    function resetPasswordPost(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required",
        ]);
        $updatePassword = DB::table('password_resets')
            ->where([
                "email" => $request->email,
                "token" => $request->token
            ])->first();
        if (!$updatePassword) {
            return redirect()->to(route("reset.password"))->with("error", "Invalid");
        }
        User::where("email", $request->email)->update([
            "password" => Hash::make($request->password)
        ]);
        DB::table("password_resets")->where(["email" => $request->email])->delete();
        return redirect()->to(route("login"))->with("success", "Password Reset Success");
    }
}
