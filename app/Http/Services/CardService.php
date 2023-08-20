<?php

namespace App\Http\Services;

use App\Models\Cart;
use App\Models\Pay;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CardService
{
     public function create($request)
     {
          $qty = (int)$request->input('num_product');
          $product_id = (int)$request->input('product_id');

          if ($qty <= 0 || $product_id <= 0) {
               Session::flash("error", "Số lượng hoặc sản phẩm không chính xác");
               return false;
          }
     //     Session::forget("carts");
          $carts = Session::get("carts");
          if (is_null($carts)) {
               Session::put("carts", [
                    $product_id => $qty
               ]);
               return true;
          }

          $exists = Arr::exists($carts, $product_id);
          if ($exists) {
               $carts[$product_id]  = $carts[$product_id] + $qty;
               Session::put("carts", $carts);
               return true;
          }
          $carts[$product_id] = $qty;
          Session::put("carts", $carts);
          return true;
     }

     public function getProducts()
     {
          $carts = Session::get("carts");
          if(is_null($carts)) return [];

         $productID = array_keys($carts);
          return Product::select("id", "name", "hinhanh", "price")
               ->where("active", 1)->whereIn("id", $productID)->get();
     }


public function remove($id){
     $carts =  Session::get('carts');
        unset($carts[$id]);
        Session::put('carts',$carts);
        return true;
}

     public function update($request)
     {
          $qty = $request->input('num_product');
          Session::put("carts", $qty);
          return true;
     }


     public function paycart($request){
         DB::beginTransaction();
    try {
        $carts = Session::get("carts");
        if(is_null($carts)) return false;
$pay = Pay::create([
    "name"=>$request->input("name"),
    "city"=>$request->input("city"),
    "address"=>$request->input("address"),
    "pay"=>$request->input("pay"),
    "phone"=>$request->input("phone"),
    "email"=>$request->input("email")
]);
$this->infoproductcart($carts ,$pay->id);
DB::commit();
Session::flash("suscess","Đặt Hàng Thành Công");
Session::flush();
    }catch (\Exception $err){
        DB::rollBack();
        Session::flash("suscess","Đặt Hàng không Thành Công");
    }
}

public function infoproductcart($carts ,$pay_id){
    $productID = array_keys($carts);
    $products = Product::select("id", "name", "hinhanh", "price")
        ->where("active", 1)->whereIn("id", $productID)->get();
$data=[];

    foreach ($products as $product){
        $total = 0;
        $priceEnd = $product->price * $carts[$product->id];
        $total += $priceEnd;
        $data[]=[
            'pay_id'=>$pay_id,
            'product_id'=>$product->id,
'soluong'=>$carts[$product->id],
'price'=>$product->price,
            'tong'=> $total
];

    }
    Cart::insert($data);
}
}
