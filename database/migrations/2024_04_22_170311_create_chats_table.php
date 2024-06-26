<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("description", 255);
            $table->unsignedBigInteger('game_id');

            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
