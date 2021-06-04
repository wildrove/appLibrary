<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rent_id');
            $table->unsignedBigInteger('user_id');
            
            $table->string('name');
            $table->string('publisher');
            $table->string('author');
            $table->integer('year')->length(4);
            $table->string('description')->nullable();
            $table->string('slug');
            
            
            $table->foreign('rent_id')->references('id')->on('rents');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('books');
    }
}