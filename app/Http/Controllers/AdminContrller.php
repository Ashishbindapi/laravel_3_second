<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $admins = Admin::get();
        $admins = Admin::all();
        // dd($admins->toArray());
        return view('admin-list',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = [
        //     "first_name" => "Test3",
        //     "last_name" => "TestUser3",
        //     "email" => "teghjst@gmail.com3",
        //     "gender" => "female",
        //     "is_active" => 0,
        // ];
        // Admin::create($data);
        // dd("Admin created successfully");
        
        $admin = new Admin();
        $admin->first_name = "Test";
        $admin->last_name = "Test";
        $admin->email = "test2h@gmail.com";
        $admin->gender = "female";
        $admin->save();

        dd("Admin Created Successfully.");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $id = 4;
        // $data = [
        // "first_name" => 'Test 1',
        // "last_name" => 'Test 2',
        // "is_active" => 0,
        // ];
        // Admin::where('id',$id)->update($data);
        // dd("Admin Updated Successfully.");

        $admin = Admin::find($id);
        dd($admin->toArray());
        $admin->first_name = "Test";
        $admin->last_name = "Test";
        $admin->is_active =1;
        $admin->save();

        dd("Admin Created Successfully.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
