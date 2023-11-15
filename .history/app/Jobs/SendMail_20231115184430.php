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

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    
    public function handle()
    {
        // email của ng gửi hoặc nhận, send(thông tin gửi về kh)
        Mail::to($this->email)
        ->cc('hunghp.22ite@vku.udn.vn')
        ->cc('hodinhtuankiet@gmail.com')
        ->cc('Phuchai5904@gmail.com')
        ->send(new OrderShipped());
    }
}
