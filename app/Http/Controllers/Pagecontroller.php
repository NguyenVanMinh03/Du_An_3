<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormPage;
use App\Models\Page;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = Page::paginate(10);
        return view("admin/Page/index",["page"=>$page]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/Page/create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormPage $request)
    {
        $name = $request->input("name");
        $desription = $request->input("desription");
        $tacgia = $request->input("tacgia");
$img= $request->file("img")->getClientOriginalName();
$request->file("img")->storeAs("public/img",$img);

        $data = [
            "name" => $name,
            "desription" => $desription,
            "tacgia" => $tacgia,
            "img" => $img,
        ];
        Page::create($data);
        return redirect("/index_page")->with("success", "Thêm Thành Công");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $page = Page::find($id);
        // return view("detail_blog",compact("page"));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Page::find($id);
        return view("admin/Page/edit",compact("page"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormPage $request, string $id)
    {
        $page = Page::find($id);
        $name = $request->input("name");
        $desription = $request->input("desription");
        $tacgia = $request->input("tacgia");
        $data = [
            "name" => $name,
            "desription" => $desription,
            "tacgia" => $tacgia,

        ];
        if ($request->file("img") !== null) {
           $img= $request->file("img")->getClientOriginalName();
$request->file("img")->storeAs("public/img",$img);
$data = [

    "img" => $img,
];
        }


        $page->update($data);
        return redirect("/index_page")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);
        $page->delete($id);
        return redirect("/index_page")->with("success","Xóa Thành Công");
    }
}
