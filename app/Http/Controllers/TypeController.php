<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TypeController extends Controller
{
    public function index($type_name){

        $type = Type::with('getCar')->where('type_name', $type_name)->get();

        $car = $type[0]->getCar;

        return view('type_car')->with('type', $type)->with('car', $car);

    }
}
