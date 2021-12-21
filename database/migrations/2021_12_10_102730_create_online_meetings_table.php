<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_meetings', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->bigInteger('class_id')->nullable();
            $table->bigInteger('schedule_id')->nullable();
            $table->text('video_link')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('online_meetings');
    }
}
