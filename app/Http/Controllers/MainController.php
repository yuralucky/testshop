<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use App\Laptop;
use App\Tablet;
use App\User;
use Doctrine\DBAL\Schema\Table;
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
        $devices = Device::paginate(4);
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
        return view('phones', compact('categories', 'devices'));
    }

    public function laptops()
    {
        $categories = Category::all();
        $laptops = Laptop::all();
        return view('laptops', compact('laptops', 'categories'));
    }

    public function tablets()
    {
        $categories = Category::all();
        $tablets = Tablet::all();

        return view('tablets', compact('categories', 'tablets'));
    }

    public function single(Device $device)
    {

      return view('single', compact('device'));
    }

    public function showUsers()
    {
        $users=User::all();
        return view('admin.users',compact('users'));
    }
}
