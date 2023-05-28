<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class testController extends Controller
{
    public function test()
    {

        $cords = ['212GJ', '213GJ', '223GJ', '2x5GJ', '401GJ', '212GM', '213GM', '223GM', '244GM', '247GM'];
        // $rops  = [   28  ,   19   ,   20   ,   22   ,   16   ,   14   ,   19   ,   15   ,   24   ,   26   ];

        $kanbanData = [];
        foreach ($cords as $cord ) {
            $kanbanData[] = [
                'jenisCord' => $cord,
                'rop'       => '10'
            ];
        }

        return $kanbanData;
    }
}
