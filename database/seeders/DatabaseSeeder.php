<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\CementingKanban;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //kanban cementing
        $cord = ['212GJ', '213GJ', '223GJ', '2x5GJ', '401GJ', '212GM', '213GM', '223GM', '244GM', '247GM'];
        $rop  = [   28  ,   19   ,   20   ,   22   ,   16   ,   14   ,   19   ,   15   ,   24   ,   26   ];

        $jumlah = count($cord);
        
        for ($i = 0; $i < $jumlah; $i++) {
            CementingKanban::create([
                'jenisCord' => $cord[$i],
                'rop'       => $rop[$i]
            ]);
        }
    }
}