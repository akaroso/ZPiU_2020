<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakedKontrahentControlled extends Controller
{
    //

    public function index(Request $request)
    {
        $date = [];

        for ($i=1; $i <10; $i++)
        {
        $date[] = [
            "ID" => $i,
            "name" => "costam.$i",
            "nip" => "autem.$i",

        ];
    }
        return response()->json($date);
    }


}
