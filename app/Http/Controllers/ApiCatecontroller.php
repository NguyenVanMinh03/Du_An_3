<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ApiCatecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = Category::all();
        return response()->json($category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $desription = $request->input("desription");


        $img = $request->file("img")->getClientOriginalName();
        $request->file("img")->storeAs("public/img", $img);

        $data = [
            "name" => $name,
            "img" => $img,
            "desription" => $desription
        ];
        $category = Category::create($data);
        return response()->json($category);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = $category->find($request->id);
        $name = $request->input("name");
        $desription = $request->input("desription");
        $data = [
            "name" => $name,
            "desription" => $desription
        ];

        if ($request->file("img") !== null) {
            $img = $request->file("img")->getClientOriginalName();
            $request->file("img")->storeAs("public/img", $img);
            $data['img'] = $img;
        }


        $category->update($data);
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json($category);
    }
}
