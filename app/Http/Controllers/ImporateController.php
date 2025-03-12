<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImporateController extends Controller
{
    public function create(){
        return view('imporate.create');
    }
}
