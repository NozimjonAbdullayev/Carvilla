<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $cars = Cars ::all();
        return view('welcome')->with([
            'cars' => $cars,
        ]);
    }
}
