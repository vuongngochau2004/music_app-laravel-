<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\NullType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('songs', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('title', 100);
    //         $table->string('artist', 100);
    //         $table->string('album', 100)->nullable();
    //         $table->string('audio_data')->nullable();
    //         $table->string('image')->nullable();;
    //         $table->double('duration')->nullable();
    //         $table->string('genre', 100)->nullable();
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('artist_id')->constrained(); // Khoá ngoại liên kết đến artists.id
            $table->foreignId('album_id')->constrained()->nullable(); // Khoá ngoại liên kết đến albums.id
            $table->string('audio_data');
            $table->string('image');
            $table->softDeletes();
            $table->string('duration')->nullable();
            $table->integer('listen_count')->default(0);
            $table->string('genre', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};

