<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('city');
            $table->string('zip_code');
            $table->integer('lga_id')->unsigned()->references('id')->on('local_governments')->onDelete('SET NULL');
            $table->integer('state_id')->unsigned()->references('id')->on('states')->onDelete('SET NULL');
            $table->string('country');
            $table->string('status')->default('current');
            $table->integer('member_id')->unsigned()->references('id')->on('adults')->onDelete('SET NULL');
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
        Schema::dropIfExists('addresses');
    }
}
