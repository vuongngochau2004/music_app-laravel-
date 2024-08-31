<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('listen_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Khoá ngoại liên kết đến users.id
            $table->foreignId('song_id')->constrained(); // Khoá ngoại liên kết đến songs.id
            $table->timestamp('listened_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('listen_histories');
    }
};
