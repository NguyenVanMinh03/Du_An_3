<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormColor;
use App\Models\Color;
use Illuminate\Http\Request;

class Colercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color = Color::all();
        return view("admin/Color/index", ["color" => $color]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/Color/create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormColor $request)
    {
        $name = $request->input("name");

        $data = [
            "name" => $name,

        ];
        Color::create($data);
        return redirect("/index_color")->with("success", "Thêm Thành Công");
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
        $color = Color::find($id);
        return view("admin/Color/edit", compact("color"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormColor $request, string $id)
    {
        $color = Color::find($id);
        $name = $request->input("name");
        $data = [
            "name" => $name

        ];
        $color->update($data);
        return redirect("/index_color")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $color = Color::find($id);
        $color->delete($id);
        return redirect("/index_color")->with("success", "Xóa Thành Công");
    }
}
