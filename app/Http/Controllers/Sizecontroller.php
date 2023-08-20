<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormSize;
use App\Models\Size;
use Illuminate\Http\Request;

class Sizecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $size = Size::all();
        return view("admin/Size/index",["size"=>$size]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/Size/create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormSize $request)
    {
        $name = $request->input("name");

        $data = [
            "name" => $name,

        ];
        Size::create($data);
        return redirect("/index_size")->with("success", "Thêm Thành Công");
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
        $size = Size::find($id);
        return view("admin/size/edit",compact("size"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormSize $request, string $id)
    {
        $size = Size::find($id);
        $name = $request->input("name");
        $data = [
            "name" => $name

        ];
        $size->update($data);
        return redirect("/index_size")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::find($id);
        $size->delete($id);
        return redirect("/index_size")->with("success","Xóa Thành Công");
    }
}
