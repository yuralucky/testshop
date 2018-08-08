<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use App\Phone;
use Egulias\EmailValidator\Exception\ConsecutiveAt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class AdminPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return view('admin.phones.index_phone')->with('phones', $phones);
    }

    /**
     * Show the form for creating a new phone.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.phones.create_phone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Phone::create($request->all());
        Session::flash('flash_message', 'Товар добавлен');
        return redirect('phone');
    }


    /**
     * Display the specified resource.
     *
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        return view('admin.phones.show_phone', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        return view('admin.phones.edit_phone', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        $phone->update($request->all());
        return redirect('admin/phone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        Session::flash('flash_message', 'Товар удален');
        return redirect('admin/phone');

    }
}
