<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use Egulias\EmailValidator\Exception\ConsecutiveAt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class AdminDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        return view('admin.devices.index_device')->with('devices', $devices);
    }

    /**
     * Show the form for creating a new device.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.devices.create_device');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Device::create($request->all());
        Session::flash('flash_message', 'Товар добавлен');
        return redirect('device');
    }


    public function upload()
    {
        return 'hi';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('admin.devices.show_device', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        return view('admin.devices.edit_device', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Device $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device->update($request->all());
        return redirect('device');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
        Session::flash('flash_message','Товар удален');
        return redirect()->back();

    }
}
