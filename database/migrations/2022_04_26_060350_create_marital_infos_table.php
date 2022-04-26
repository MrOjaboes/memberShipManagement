<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaritalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marital_infos', function (Blueprint $table) {
            $table->id();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_birthdate')->nullable();
            $table->string('spouse_contact')->nullable();
            $table->string('wedding_date')->nullable();
            $table->string('child_name')->nullable();
            $table->string('child_birthdate')->nullable();
            $table->string('child_gender')->nullable();
            $table->integer('profile_id')->unsigned()->references('id')->on('profiles')->onDelete('SET NULL');
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
        Schema::dropIfExists('marital_infos');
    }
}
