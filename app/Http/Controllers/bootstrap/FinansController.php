<?php

namespace App\Http\Controllers\bootstrap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinansController extends Controller
{
    public function index(){
        return view('bootstrap.finans.index');
    }
}
