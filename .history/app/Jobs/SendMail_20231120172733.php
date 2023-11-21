<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\Models\User;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    
    public function handle()
    {
        // email của ng gửi hoặc nhận, send(thông tin gửi về kh)
        $user = User::findOrFail($userID);
        $email = $user->email;

        Mail::to($email)
        ->send(new OrderShipped());
    }
}
