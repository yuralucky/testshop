<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use Illuminate\Http\Request;
use MongoDB\BSON\Decimal128;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        $devices = Device::all();
        return view('index', ['categories' => $categories, 'devices' => $devices]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function phones()
    {
        $categories = Category::all();
        $devices = Device::all();
        return view('layouts.categories1', compact('categories', 'devices'));
    }

    public function laptops()
    {
        $categories = Category::all();
        $devices = Device::all();
        return view('layouts.categories1', compact('categories', 'devices'));
    }

    public function tablets()
    {
        $categories = Category::all();
        $devices = Device::all();
        return view('layouts.categories1', compact('categories', 'devices'));
    }

    public function single(Device $device)
    {
        return view('single', compact('device'));
    }
}
