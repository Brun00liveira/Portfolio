<?php

namespace App\Http\Controllers\laravel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        return view('laravel.index');
    }
    public function add(){
        return view('laravel.add');
    }
}
