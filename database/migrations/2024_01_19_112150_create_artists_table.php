<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id(); // Tự tăng khóa chính
            $table->string('name');
            $table->string('country')->nullable();
            $table->integer('birth_year')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artists');
    }

    /**
     * Reverse the migrations.
     */
    
};
