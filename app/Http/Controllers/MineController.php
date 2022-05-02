<?php

namespace App\Http\Controllers;
use App\Models\Mine;

use Illuminate\Http\Request;

class MineController extends Controller
{
    public function show($mine) {
        //dd($mine);
        dd(Mine::find($mine));

    }

    public function index() 
    {
        $mines = Mine::all();
        
        $mineData = [];
        foreach ($mines as $x=>$y) {

            array_push($mineData, [$x=>$y]);
        }
        return view('mines', $mineData);
        
    }

}
