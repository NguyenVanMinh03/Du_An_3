<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormBrand;
use App\Models\Brand;
use Illuminate\Http\Request;

class Brandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::all();
        return view("admin/Brand/index", ["brand" => $brand]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/Brand/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormBrand $request)
    {
        $name = $request->input("name");

        $data = [
            "name" => $name,

        ];
        Brand::create($data);
        return redirect("/index_brand")->with("success", "Thêm Thành Công");
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
        $brand = Brand::find($id);
        return view("admin/Brand/edit", compact("brand"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormBrand $request, string $id)
    {
        $brand = Brand::find($id);
        $name = $request->input("name");
        $data = [
            "name" => $name

        ];
        $brand->update($data);
        return redirect("/index_brand")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete($id);
        return redirect("/index_brand")->with("success", "Xóa Thành Công");
    }
}
