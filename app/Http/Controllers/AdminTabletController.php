<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use App\Phone;
use App\Tablet;
use Egulias\EmailValidator\Exception\ConsecutiveAt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class AdminTabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablets = Tablet::all();
        return view('admin.tablets.index_tablet')->with('tablets', $tablets);
    }

    /**
     * Show the form for creating a new phone.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.tablets.create_tablet');
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
        $tablet = new Tablet();
        $tablet->image = $name;
        $tablet->name = $request->name;
        $tablet->description = $request->description;
        $tablet->price = $request->price;
        $tablet->save();

        Session::flash('flash_message', 'Товар добавлен');
        return redirect('admin/tablet');
    }


    /**
     * Display the specified resource.
     *
     * @param Tablet $tablet
     * @return \Illuminate\Http\Response
     */
    public function show(Tablet $tablet)
    {
        return view('admin.tablets.show_tablet', compact('tablet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tablet $tablet
     * @return \Illuminate\Http\Response
     */
    public function edit(Tablet $tablet)
    {
        return view('admin.tablets.edit_tablet', compact('tablet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Tablet $tablet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tablet $tablet)
    {
        $tablet->update($request->all());
        return redirect('admin/tablet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tablet $tablet
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Tablet $tablet)
    {
        $tablet->delete();
        Session::flash('flash_message', 'Товар удален');
        return redirect('admin/tablet');

    }
}
