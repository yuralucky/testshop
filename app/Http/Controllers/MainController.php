<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories=Category::all();
        $devices=Device::all();
        return view('index',['categories'=>$categories,'devices'=>$devices]);
    }

    public function contact()
    {
        return view('contact');
    }
}
