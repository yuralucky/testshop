<?php

namespace App\Http\Controllers;

use App\Category;
use App\Laptop;
use App\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminLaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::all();
        return view('admin.laptops.index_laptop')->with('laptops', $laptops);
    }

    /**
     * Show the form for creating a new phone.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.laptops.create_laptop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->file('image')->getClientOriginalName();
        request()->image->move(public_path('image'), $name);
        $laptop = new Laptop();
        $laptop->image = $name;
        $laptop->name = $request->name;
        $laptop->description = $request->description;
        $laptop->price = $request->price;
        $laptop->save();
        Session::flash('flash_message', 'Товар добавлен');
        return redirect('admin/laptop');
    }


    /**
     * Display the specified resource.
     *
     * @param Laptop $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        return view('admin.laptops.show_laptop', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Laptop $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        return view('admin.laptops.edit_laptop', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Laptop $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        $laptop->update($request->all());
        return redirect('admin/laptop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();
        Session::flash('flash_message','Товар удален');
        return redirect('admin/laptop');

    }
}
