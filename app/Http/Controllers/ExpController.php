<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpController extends Controller
{
    public function index(){
        return view('portfolio.exp');
    }
}
