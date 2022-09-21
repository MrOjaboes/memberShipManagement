<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('hog_member_id');
            $table->enum('gender',['female','male']);
            $table->string('email')->nullable();
            $table->integer('image_id')->unsigned()->references('id')->on('images')->onDelete('SET NULL');
            $table->string('level');
            $table->string('school')->nullable();
            $table->string('age_range');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('guardian_one')->nullable();
            $table->string('guardian_two')->nullable();
            $table->string('class');
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
        Schema::dropIfExists('childrens');
    }
}
