<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMomoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('momo', function (Blueprint $table) {
            $table->id();
            $table->string('partnerCode');
            $table->string('orderId');
            $table->string('requestId');
            $table->string('amount');
            $table->string('orderInfo');
            $table->string('orderType');
            $table->string('transId');
            $table->string('payType');
            $table->string('signature');

            // 2 cái update và create at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('momo');
    }
}
