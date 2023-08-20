<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cate_categender;
use App\Models\CateGender;
use App\Models\Category;
use App\Models\chungdan;
use App\Models\Color;
use App\Models\Page;
use App\Models\Product;
use App\Models\Role;
use App\Models\Size;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        $cate_categender = Cate_categender::all();
        $categender = CateGender::all();
        $category = Category::orderByDesc("created_at")->limit(4)->get();
        $product = Product::where("tinhtrang_id",1)->orderByDesc("created_at")->limit(8)->get();
        $pagelimit = Page::orderByDesc("created_at")->limit(4)->get();
$product_color  =  DB::table("product_color")->get();
        return view("home/home",
        ["cate_categender"=>$cate_categender,
        "categender"=>$categender,"category"=>$category,"product"=>$product,"pagelimit"=>$pagelimit,"product_color"=>$product_color]);
    }
    public function about(){
        return view("home/about_us");
    }
    public function shop(){
        $cate_categender = Cate_categender::all();
        $categender = CateGender::all();
        $category = Category::all();
        $product = Product::paginate(12);
        $brand = Brand::all();


        return view("home/shop",["cate_categender"=>$cate_categender,
        "categender"=>$categender,"product"=>$product,
        "category"=>$category,"brand"=>$brand]);
    }
    public function contact(){
        return view("home/contact");
    }
    public function page(){
        $page = Page::orderByDesc("created_at")->limit(6)->get();
        return view("home/page",["page"=>$page]);
    }
    public function detail_product($id){
        $product = Product::find($id);
        $category = Category::all();
        $color = Color::all();
        $size = Size::all();
        $colorr  = DB::table("product_color")->get();

        $productlimit = Product::orderByDesc("created_at")->limit(4)->get();


        $brand = Brand::all();
        return view("home/detail_product",["product"=>$product,
        "category"=>$category,"brand"=>$brand,
        "productlimit"=>$productlimit,"color"=>$color,"size"=>$size,"colorr"=>$colorr]);
    }
    public function detail_blog($id){
        $pagelimit = Page::orderByDesc("created_at")->limit(4)->get();

        $page = Page::find($id);
        return view("home/detail_blog",["page"=>$page,"pagelimit"=>$pagelimit]);
    }
    public function login(){
        return view("home/login");
    }
    public function myaccount(){
        return view("home/myaccount");
    }
    public function editmyacc(){
        return view("home/editmyacc");
    }
    public function logup(){
        $role = Role::all();
        return view("home/logup",["role"=>$role]);
    }
    public function card(){
        return view("home/card");
    }



    //admin
    public function admin(){
        return view("admin/tongquan");
    }
//     public function seach(){
//        $product = Product::limit(1)->get();
//         $page = Page::limit(1)->get();
//         return view("home/seach",compact("product","page"));
//     }



}
