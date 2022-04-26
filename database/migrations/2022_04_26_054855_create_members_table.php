<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('number_of_children')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_one')->nullable();
            $table->string('contact_two')->nullable();
            $table->string('age_group')->nullable();
            $table->string('gender')->nullable();
            $table->string('church_location')->nullable();
            $table->string('address_one')->nullable();
            $table->string('address_two')->nullable();
            $table->string('area')->nullable();
            $table->string('fellowship_group')->nullable();
            $table->string('friendship_centre')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('wedding_date')->nullable();
            $table->string('occupation')->nullable();
            $table->string('leadership_position')->nullable();
            $table->string('memberId')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('members');
    }
}
