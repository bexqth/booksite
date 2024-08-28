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
        Schema::create('reading_list', function (Blueprint $table) {
            //https://laravel.com/docs/11.x/migrations#foreign-key-constraints
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('isbn');
            $table->enum('type', ['reading', 'read']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('isbn')->references('isbn')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reading_list');
    }
};
