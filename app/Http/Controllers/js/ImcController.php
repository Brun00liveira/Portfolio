<?php

namespace App\Http\Controllers\js;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index(){
        return view('javascript.IMC.index');
    }
}
