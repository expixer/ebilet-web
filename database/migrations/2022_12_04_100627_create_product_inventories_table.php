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
        Schema::create('product_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class);
            $table->foreignIdFor(\App\Models\Merchant::class);
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("merchant_id")->references("id")->on("merchants")->onDelete("cascade");
            $table->unsignedInteger('quantity');
            $table->unsignedDouble('price');
            $table->unsignedDouble('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->unsignedDouble('discount_amount')->nullable();
            $table->dateTime('discount_start_date')->nullable();
            $table->dateTime('discount_end_date')->nullable();
            $table->unsignedTinyInteger('status');
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
        Schema::dropIfExists('product_inventories');
    }
};
