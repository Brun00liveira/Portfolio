<?php

namespace App\Http\Controllers\bootstrap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public function index(){
        return view('bootstrap.spotify.index');
    }
}
