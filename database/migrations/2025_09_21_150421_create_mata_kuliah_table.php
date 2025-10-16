<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_mk');
            $table->integer('sks');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
