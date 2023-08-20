<?php

namespace App\Http\Controllers;

use App\Models\Cate_categender;
use App\Models\CateGender;
use App\Models\Category;
use Illuminate\Http\Request;

class Cate_categendercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        $categorygender = Cate_categender::all();
        $categender = CateGender::all();

        return view("admin/Cate_categender/index",
        ["categorygender"=>$categorygender,"category"=>$category,"categender"=>$categender]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $categorygender = CateGender::all();
        return view("admin/Cate_categender/create",
        ["categorygender"=>$categorygender,"category"=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category_id = $request->input("category_id");
        $category_gender_id = $request->input("category_gender_id");
        $data = [
            "category_id" => $category_id,
            "category_gender_id" => $category_gender_id,

           
        ];
        Cate_categender::create($data);
        return redirect("/index_cate_categender")->with("success", "Thêm Thành Công");
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
        $categorygender = Cate_categender::find($id);
        $category = Category::all();
        $categender = CateGender::all();

        return view("admin/Cate_categender/edit",compact("categorygender"),
        ["category"=>$category,"categender"=>$categender]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorygender = Cate_categender::find($id);
        $category_id = $request->input("category_id");
        $category_gender_id = $request->input("category_gender_id");
        $data = [
            "category_id" => $category_id,
            "category_gender_id" => $category_gender_id,

           
        ];
        $categorygender->update($data);
        return redirect("/index_cate_categender")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorygender = Cate_categender::find($id);
        $categorygender->delete($id);
        return redirect("/index_cate_categender")->with("success", "Xóa Thành Công");

    }
}
