<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('image_id');           // $table->integer('member_id')->unsigned()->references('id')->on('adults')->onDelete('SET NULL');
            $table->boolean('status')->default(false);           // $table->integer('member_id')->unsigned()->references('id')->on('adults')->onDelete('SET NULL');
            $table->text('store_path'); 
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
        Schema::dropIfExists('images');
    }
}
