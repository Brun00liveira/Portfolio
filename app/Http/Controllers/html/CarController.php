<?php

namespace App\Http\Controllers\html;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('html.car.index');
    }
}
