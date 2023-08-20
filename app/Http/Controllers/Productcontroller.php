<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\chungdan;
use App\Models\Color;
use App\Models\Page;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // protected $Product;
    // public function __construct()
    // {
    //     $this->Product = new Product();
    // }

    public function index()
    {
        $brand = Brand::all();
        $product = Product::orderByDesc("created_at")->paginate(10);
        $category = Category::all();
        // $product = chungdan::with("product","color")->paginate(8);

        return view(
            "admin/Product/index",
            ["product" => $product, "brand" => $brand, "category" => $category]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = Brand::all();
        $category = Category::all();
        $product = Product::all();
        $color = Color::all();
        $size = Size::all();

        return view(
            "admin/Product/create",
            [
                "brand" => $brand, "category" => $category,
                "product" => $product, "color" => $color, "size" => $size
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormProduct $request)
    {
        $name = $request->input("name");
        $desription = $request->input("desription");
        $mahang = $request->input("mahang");
        $price = $request->input("price");
        $old_price = $request->input("old_price");
        $brand = $request->input("brand");
        $khoiluong = $request->input("khoiluong");
        $danhmuc = $request->input("danhmuc");
        $active = $request->input("active");

        $tinhtrang_id = $request->input("tinhtrang_id");
        $hinhanh = $request->file("hinhanh")->getClientOriginalName();
        $request->file("hinhanh")->storeAs("public/img", $hinhanh);
        $data = [
            "name" => $name,
            "desription" => $desription,
            "mahang" => $mahang,
            "hinhanh" => $hinhanh,
            "price" => $price,
            "old_price" => $old_price,
            "brand" => $brand,
            "khoiluong" => $khoiluong,
            "danhmuc" => $danhmuc,
            "tinhtrang_id" => $tinhtrang_id,
            "active" => $active,


        ];

        $product = Product::create($data);
        $coloritem = $request->color_id;
        $sizeitem = $request->color_id;

        // $product->colors()->attach($coloritem);
        foreach ($coloritem as $item) {
            DB::table("product_color")->insert([
                "color_id" => $item,
                "product_id" => $product->id
            ]);
        }


        foreach ($sizeitem as $item) {
            DB::table("product_size")->insert([
                "size_id" => $item,
                "product_id" => $product->id
            ]);
        }

        //   dd();
        return redirect("/index_product")->with("success", "Thêm Thành Công");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


        $category = Category::all();
        $product = Product::where("danhmuc", $id)->get();
        $brand = Brand::find($id);


        return view("home/shop", compact("category", "brand", "product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $color = Color::all();
        $size = Size::all();
        $brand = Brand::all();
        $category = Category::all();
        $product = Product::find($id);

        return view(
            "admin/Product/edit",
            compact("product"),
            ["brand" => $brand, "category" => $category, "color" => $color, "size" => $size]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormProduct $request, string $id)
    {
        $product = Product::find($id);
        $tinhtrang_id = $request->input("tinhtrang_id");

        $name = $request->input("name");
        $desription = $request->input("desription");
        $mahang = $request->input("mahang");
        $price = $request->input("price");

        $old_price = $request->input("old_price");
        $active = $request->input("active");

        $brand = $request->input("brand");
        $khoiluong = $request->input("khoiluong");
        $danhmuc = $request->input("danhmuc");


        $data = [
            "name" => $name,
            "desription" => $desription,
            "mahang" => $mahang,

            "price" => $price,

            "old_price" => $old_price,
            "brand" => $brand,
            "khoiluong" => $khoiluong,
            "danhmuc" => $danhmuc,
            "tinhtrang_id" => $tinhtrang_id,

            "active" => $active,


        ];
        if ($request->file("hinhanh") !== null) {
            $hinhanh = $request->file("hinhanh")->getClientOriginalName();
            $request->file("hinhanh")->storeAs("public/img", $hinhanh);
            $data['hinhanh'] = $hinhanh;
        }

        $product->update($data);
        $coloritem = $request->color_id;
        $sizeitem = $request->color_id;

        // $product->colors()->attach($coloritem);
        foreach ($coloritem as $item) {
            DB::table("product_color")->insert([
                "color_id" => $item,
                "product_id" => $product->id
            ]);
        }


        foreach ($sizeitem as $item) {
            DB::table("product_size")->insert([
                "size_id" => $item,
                "product_id" => $product->id
            ]);
        }
        return redirect("/index_product")->with("success", "Update Thành Công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete($id);
        return redirect("/index_product")->with("success", "Xóa Thành Công");
    }
}
