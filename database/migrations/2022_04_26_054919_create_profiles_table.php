<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('number_of_children')->nullable();
            $table->string('email');
            $table->string('contact_one');
            $table->string('contact_two')->nullable();
            $table->string('age_group');
            $table->string('gender');
            $table->string('church_location');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('area');
            $table->string('fellowship_group');
            $table->string('friendship_centre');
            $table->string('marital_status');
            $table->string('birth_date');
            $table->string('wedding_date')->nullable();
            $table->string('occupation');
            $table->string('leadership_position');
            $table->string('memberId');
            $table->string('photo');
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('SET NULL');
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
        Schema::dropIfExists('profiles');
    }
}
