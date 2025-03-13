<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImporateController extends Controller
{
    public function index(){
        return view('imporate.index');
    }
    public function create(){
        return view('imporate.create');
    }
}
