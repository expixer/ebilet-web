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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('tags')->nullable();
            $table->string('location');
            $table->string('image');
            $table->unsignedTinyInteger("status")->default(1);
            $table->foreignIdFor(\App\Models\Merchant::class)->nullable();
            $table->foreign("merchant_id")->references("id")->on("merchants")->onDelete("cascade");
            $table->foreignIdFor(\App\Models\Category::class)->nullable();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign("event_id")->references("id")->on("events")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
