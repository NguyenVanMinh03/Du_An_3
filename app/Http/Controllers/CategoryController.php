<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormCategory;
use App\Http\Requests\ValidateFormCategory;
use App\Models\CateGender;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::paginate(10);
        $categender = CateGender::all();

        return view("admin/Category/index",["category"=>$category,"categender"=>$categender]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

        $categorygender = CateGender::all();

        return view("admin/Category/create",["categorygender"=>$categorygender]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormCategory $request)
    {
        $name = $request->input("name");
        $desription = $request->input("desription");


        $img = $request->file("img")->getClientOriginalName();
        $request->file("img")->storeAs("public/img" , $img);

        $data = [
            "name" => $name,
            "img" => $img,
            "desription" => $desription
        ];
        Category::create($data);
        return redirect("/category/index_category")->with("success", "Thêm Thành Công");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view("admin/Category/edit",compact("category"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormCategory $request, string $id)
    {
        $category = Category::find($id);
        $name = $request->input("name");
        $desription = $request->input("desription");
$data = [
            "name" => $name,
            "desription" => $desription
        ];

        if ( $request->file("img")!==null) {
             $img = $request->file("img")->getClientOriginalName();
        $request->file("img")->storeAs("public/img" , $img);
        $data['img']=$img;
        }


        $category->update($data);
        return redirect("/category/index_category")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete($id);
        return redirect("/category/index_category")->with("success","Xóa Thành Công");
    }
}
