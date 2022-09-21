<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adults', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('hog_member_id');
            $table->enum('gender',['female','male']);
            $table->string('email');
            $table->string('primary_phone');
            $table->string('secondary_phone')->nullable();
            $table->string('image_id')->nullable();
            $table->string('spouse_member_id');
            $table->string('church');
            $table->string('age_range');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('marital_status');
            $table->string('wedding_date')->nullable();
            $table->string('occupation');
            $table->boolean('is_leader')->default(false);
            $table->integer('fellowship_group_id')->unsigned()->references('id')->on('fellowship_groups')->onDelete('SET NULL');
            $table->integer('friendship_centre_id')->unsigned()->references('id')->on('friendship_centres')->onDelete('SET NULL');
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
        Schema::dropIfExists('adults');
    }
}
