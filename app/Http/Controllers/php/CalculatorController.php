<?php

namespace App\Http\Controllers\php;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('php.conversor.index');
    }
    public function currency(){
        return view('php.conversor.moeda');
    }
    public function time(){
        return view('php.conversor.time');
    }
    public function weather(){
        return view('php.conversor.weather');
    }
    public function weight(){
        return view('php.conversor.weight');
    }
    public function calculator(){
        return view('php.conversor.calculator');
    }
}
