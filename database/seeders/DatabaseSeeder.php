<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use \App\Models\CementingKanban;
use App\Models\ShortsizeBuildingMaterial;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Cord
        $cord  = [  '212GJ', '213GJ', '223GJ', '2x5GJ', '401GJ',
                    '212GM', '213GM', '223GM', '244GM', '247GM' ];
                    
        //rop cord
        $rop   = [ 28, 19, 20, 22, 16, 14, 19, 15, 24, 26 ];
        
        //warna kanban tiap cord
        $warna = [  '#FFD1DC', '#B2DFDB', '#D7C7E9', '#AADEFA', '#FFFFE0',
                    '#FAA5B4', '#A1D5C1', '#C8A2C8', '#7DADF1', '#FFE5B4' ];
        
        for ($i = 0; $i < count($cord); $i++) {
            CementingKanban::create([
                'cord'  => $cord[$i],
                'rop'   => $rop[$i],
                'wip'   => 0,
                'warna' => $warna[$i]
            ]);
        }

        $material = ['AN220', 'GM70', 'GM868', 'GR41', 'OCR', 'GM829', ...$cord];

        for ($i=0; $i < count($material) ; $i++) { 
            ShortsizeBuildingMaterial::create([
                'material' => $material[$i],
                'lot' => '1A1121223-' . sprintf('%02d', $i+1)
            ]);
        }

        $users = [
            ['Zulfa', '111', '111', 'building', 'B', 1, 1],
            ['Suryadi', '222', '222', 'building', 'B', 2, 2],
            ['Iwan', '333', '333', 'building', 'B', 3, 3],
            ['Dian', '444', '444', 'building', 'B', 4, 4],
            ['Nanda', '555', '555', 'building', 'B', 5, 5],
            ['Admin', '123', '123', 'admin', '', 0, 0],
        ];

        foreach ($users as $user) {
            User::create([
                'nama'       => $user[0],
                'nik'        => $user[1],
                'password'   => bcrypt($user[2]),
                'role'       => $user[3],
                'grup'       => $user[4],
                'line'       => $user[5],
                'noMesin'    => $user[6],
                'departemen' => 'shortsize'
            ]);
        }
    }
}