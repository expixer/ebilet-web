<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Order::class);
            $table->unsignedDouble('amount');
            $table->foreignIdFor(\App\Models\Merchant::class, 'provider_id');
            $table->unsignedTinyInteger('status');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('provider_id')->references('id')->on('merchants');
            $table->softDeletes();
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
        Schema::dropIfExists('payments');
    }
};
