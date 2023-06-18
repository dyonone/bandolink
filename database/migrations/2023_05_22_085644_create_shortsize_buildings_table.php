<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shortsize_buildings', function (Blueprint $table) {
            $table->id();
            $table->string('ppc')->nullable();
            $table->string('spec')->nullable();
            $table->string('type')->nullable();
            $table->integer('size')->nullable();
            $table->string('ucr')->nullable();
            $table->string('ucrLot')->nullable();
            $table->string('adr')->nullable();
            $table->string('adrLot')->nullable();
            $table->string('adrTebal')->nullable();
            $table->string('cord')->nullable();
            $table->string('cordLot')->nullable();
            $table->string('cordPitch')->nullable();
            $table->string('cordTension')->nullable();
            $table->string('ocr')->nullable();
            $table->string('ocrLot')->nullable();
            $table->string('ocrTebal')->nullable();
            $table->string('jumlahKartu')->nullable();
            $table->integer('ukurMandrel')->nullable();
            $table->integer('pcs1')->nullable();
            $table->integer('pcs2')->nullable();
            $table->integer('pcs3')->nullable();
            $table->integer('pcs4')->nullable();
            $table->integer('pcs5')->nullable();
            $table->integer('pcs6')->nullable();
            $table->integer('coresTebal1')->nullable();
            $table->integer('coresTebal2')->nullable();
            $table->integer('coresTebal3')->nullable();
            $table->integer('coresLebar1')->nullable();
            $table->integer('coresLebar2')->nullable();
            $table->integer('coresLebar3')->nullable();
            $table->integer('coresPanjang1')->nullable();
            $table->integer('coresPanjang2')->nullable();
            $table->integer('coresPanjang3')->nullable();
            $table->integer('afkir1')->nullable();
            $table->integer('afkir2')->nullable();
            $table->integer('afkir3')->nullable();
            $table->integer('afkir4')->nullable();
            $table->integer('afkir5')->nullable();
            $table->integer('afkir6')->nullable();
            $table->integer('afkir7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortsize_buildings');
    }
};
