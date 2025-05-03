<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('year');
            $table->string('rated');
            $table->string('duration');
            $table->string('picture')->nullable();
            $table->text('description');
            $table->string('main_cast');
            $table->string('director');
            $table->string('genre');
            $table->string('time_slots'); // Store as comma-separated or JSON
            $table->integer('cinema_room');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
}; 