<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showGalerry(){
        return view('pages.menu');
    }
}
