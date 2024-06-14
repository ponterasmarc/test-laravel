<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelocomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
