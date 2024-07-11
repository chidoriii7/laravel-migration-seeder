<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function homepage(){

        $trains = Train::all();
        return view('layouts.demo.trains', compact('trains'));

    }
}
