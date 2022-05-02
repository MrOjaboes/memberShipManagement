<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadersMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('caption');
            $table->string('description');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('leaders_meetings');
    }
}
