<?php

namespace App\Http\Controllers;

use App\Models\CateGender;
use App\Models\Category;
use Illuminate\Http\Request;

class CateGendercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categender = CateGender::all();
        return view("admin/Cate_Gender/index", ["categender" => $categender]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/Cate_Gender/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $desription = $request->input("desription");
        $data = [
            "name" => $name,
            "desription" => $desription,
        ];

        CateGender::create($data);
        return redirect("/index_category_gender")->with("success", "Thêm Thành Công");
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
        $categender = CateGender::find($id);
        return view("admin/Cate_Gender/edit",compact("categender"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categender = CateGender::find($id);
        $name = $request->input("name");
        $desription = $request->input("desription");
        $data = [
            "name" => $name,
            "desription" => $desription
        ];
        $categender->update($data);
        return redirect("/index_category_gender")->with("success", "Update Thành Công");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categender = CateGender::find($id);
        $categender->delete($id);
        return redirect("/index_category_gender")->with("success", "Xóa Thành Công");
    }
}
