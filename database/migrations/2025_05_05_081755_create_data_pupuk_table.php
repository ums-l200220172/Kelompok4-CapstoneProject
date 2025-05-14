<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPupukTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pupuk', function (Blueprint $table) {
            $table->id(); // ini akan otomatis menjadi primary key dan auto-increment
            $table->string('nama_pupuk', 100);
            $table->integer('nitrogen');
            $table->integer('fosfor');
            $table->integer('kalium');
            $table->text('manfaat');
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pupuk');
    }
}
