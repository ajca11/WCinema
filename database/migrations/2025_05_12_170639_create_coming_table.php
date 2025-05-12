<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('coming', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->year('year');
            $table->string('rated');
            $table->string('duration');
            $table->string('picture')->nullable();
            $table->text('description');
            $table->text('main_cast');
            $table->text('director');
            $table->text('genre');
            $table->string('time_slots'); // or ->json('time_slots')
            $table->unsignedTinyInteger('cinema_room');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coming');
    }
};
