<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function foodBeverage()
    {
        return view("ini_templt")->with('iniHal', 'Food Beverage');
    }

    public function beautyHealth()
    {
        return view("ini_templt")->with('iniHal', 'Beauty Health');
    }

    public function homeCare()
    {
        return view("ini_templt")->with('iniHal', 'Home Care');
    }

    public function babyKid()
    {
        return view("ini_templt")->with('iniHal', 'Baby Kid');
    }
}
