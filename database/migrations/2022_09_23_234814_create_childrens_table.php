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
            $table->integer('image_id');
            $table->integer('parent_id')->unsigned()->references('id')->on('adults')->onDelete('SET NULL');
            $table->integer('class_id')->unsigned()->references('id')->on('children_classes')->onDelete('SET NULL');
            $table->integer('age_id')->unsigned()->references('id')->on('age_ranges')->onDelete('SET NULL'); 
            $table->string('school')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
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
