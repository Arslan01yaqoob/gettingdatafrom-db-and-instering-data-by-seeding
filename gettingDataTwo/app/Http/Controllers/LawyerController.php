<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{

    public function givemelawyers()
    {
        $lawyers = DB::table('lawyers')->get();
        // return $lawyers;
        return view('welcome', ['abc' => $lawyers]);
    }
    public function singlelawyer(string $id)
    {
        $lawyer = DB::table('lawyers')->where('id', $id)->get();
       return view('lawyer',['abc'=>$lawyer] );
        // return $lawyer;

    }


}

