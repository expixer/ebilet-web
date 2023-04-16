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
        Schema::table('users', function (Blueprint $table) {
            $table->string('bio')->nullable()->after('email');
            $table->string('image')->nullable()->after('bio');
            $table->string('cover')->nullable()->after('image');
            $table->string('merchant_id')->nullable()->after('cover');
            $table->string('instagram')->nullable()->after('merchant_id');
            $table->string('facebook')->nullable()->after('instagram');
            $table->string('twitter')->nullable()->after('facebook');
            $table->string('linkedin')->nullable()->after('twitter');
            $table->string('youtube')->nullable()->after('linkedin');
            $table->string('website')->nullable()->after('youtube');
            $table->string('phone')->nullable()->after('website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bio');
            $table->dropColumn('image');
            $table->dropColumn('cover');
            $table->dropColumn('merchant_id');
            $table->dropColumn('instagram');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');
            $table->dropColumn('youtube');
            $table->dropColumn('website');
            $table->dropColumn('phone');
        });
    }
};
