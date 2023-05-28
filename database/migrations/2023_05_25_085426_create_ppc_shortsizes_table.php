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
        Schema::create('ppc_shortsizes', function (Blueprint $table) {
            $table->id();
            $table->string('ppc');
            $table->string('spec');
            $table->string('type');
            $table->string('size');
            $table->string('pcsSlab');
            $table->string('mandrel');
            $table->string('tebal');
            $table->string('lebar');
            $table->string('panjang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppc_shortsizes');
    }
};

// PpcShortsize::create([
//     'ppc' => '654321',
//     'spec' => 'AJGV',
//     'type' => 'A',
//     'size' => '52',
//     'pcsSlab' => '100',
//     'mandrel' => '1420',
//     'tebal' => '6.6',
//     'lebar' => '10.0',
//     'panjang' => '482'
// ])