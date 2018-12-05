<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use App\Laptop;
use App\Phone;
use App\Tablet;
use App\User;
use DB;
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
        $phones = DB::table('phones')->paginate(9);
        return view('phones', compact('categories', 'phones'));
    }

    public function phonesByName()
    {
        $categories = Category::all();
        $phones = DB::table('phones')->orderBy('name')->get();
        return view('phones', compact('categories', 'phones'));
    }

    public function phonesByPrice()
    {
        $categories = Category::all();
        $phones = Db::table('phones')->orderBy('price')->get();
        return view('phones', compact('categories', 'phones'));
    }

    public function laptops()
    {
        $categories = Category::all();
        $laptops = DB::table('laptops')->paginate(9);
        return view('laptops', compact('laptops', 'categories'));
    }

    public function laptopsByName()
    {
        $categories = Category::all();
        $laptops = DB::table('laptops')->orderBy('name')->get();
        return view('laptops', compact('categories', 'laptops'));
    }

    public function laptopsByPrice()
    {
        $categories = Category::all();
        $laptops = Db::table('laptops')->orderBy('price')->get();
        return view('laptops', compact('categories', 'laptops'));
    }

    public function tablets()
    {
        $categories = Category::all();
        $tablets = DB::table('tablets')->paginate(9);

        return view('tablets', compact('categories', 'tablets'));
    }

    public function tabletsByName()
    {
        $categories = Category::all();
        $tablets = DB::table('tablets')->orderBy('name')->get();
        return view('tablets', compact('categories', 'tablets'));
    }

    public function tabletsByPrice()
    {
        $categories = Category::all();
        $tablets = Db::table('tablets')->orderBy('price')->get();
        return view('tablets', compact('categories', 'tablets'));
    }

    public function single(Device $device)
    {

        return view('single', compact('device'));
    }

    public function single_laptop(Laptop $laptop)
    {

        return view('single_laptop', compact('laptop'));
    }

    public function single_phone(Phone $phone)
    {

        return view('single_phone', compact('phone'));
    }

    public function single_tablet(Tablet $tablet)
    {

        return view('single_tablet', compact('tablet'));
    }

    public function showUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function upload()
    {
        return view('admin.tablets.upload_image');
    }

    public function uploadImage()
    {
        $imageName = time() . '.' . request()->image->extension();
        request()->image->move(public_path('image'), $imageName);

        return back();
    }


}
