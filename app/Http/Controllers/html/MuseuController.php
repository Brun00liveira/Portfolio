<?php

namespace App\Http\Controllers\html;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MuseuController extends Controller
{
    public function index(){
        return view('html.museu.index');
    }
}
