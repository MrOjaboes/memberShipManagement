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
            $table->string('email');
            $table->string('primary_phone')->nullable();
            $table->string('secondary_phone');
            $table->string('image_id')->nullable();
            $table->string('level');
            $table->string('school')->nullable();
            $table->string('birth_date');
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
