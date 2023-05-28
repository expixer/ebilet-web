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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('booking_number')->unique()->nullable();

            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('seats')->nullable();
            $table->integer('seatCount')->nullable();
            $table->integer('price')->nullable();

            $table->boolean('isPaid')->default(false);
            $table->boolean('isConfirmed')->default(false);

            $table->string('paymentMethod')->nullable();
            $table->string('paymentId')->nullable();
            $table->string('paymentStatus')->nullable();

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
        Schema::dropIfExists('bookings');
    }
};
