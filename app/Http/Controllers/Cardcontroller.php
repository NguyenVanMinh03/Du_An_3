<?php

namespace App\Http\Controllers;

use App\Http\Services\CardService;

use App\Models\Cart;
use App\Models\Pay;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cardcontroller extends Controller
{

    protected $cardService;

    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

    public function index(Request $request)
    {
        $result = $this->cardService->create($request);
        if ($result == false) {
            return redirect()->back();
        }
        return redirect("/card");
    }


    public function show()
    {
        $products = $this->cardService->getProducts();
        $carts = Session::get('carts');
        return view("home/card", compact("products", "carts"));
    }

    public function showpay()
    {
        $products = $this->cardService->getProducts();
        $carts = Session::get('carts');
        return view("home/pay", compact("products", "carts"));
    }

    public function showpaycart()
    {
        $carts = Cart::all();
        $pays = Pay::all();
        $product = Product::all();

        return view("admin/pay/index", compact("carts"),["pays"=>$pays, "product"=>$product]);
    }

    public function delete(string $id)
    {
        $this->cardService->remove($id);
        return redirect('/card');

    }

    public function update(Request $request)
    {
        // dd($request->all());
        $this->cardService->update($request);
        return redirect('/card');

        //   if ($success) {
        //     return redirect(to:"/card")->with('success', 'Cập nhật giỏ hàng thành công');
        // } else {
        //     return redirect()->back()->with('error', 'Có lỗi xảy ra khi cập nhật giỏ hàng');
        // }

    }

    public function paycart(Request $request)
    {
        $result = $this->cardService->paycart($request);
        return redirect()->back();
    }

    public function destroys(string $id){
//        $pay = Pay::find($id);
        $cart = Cart::find($id);

//        $pay->delete($id);
        $cart->delete($id);

        return redirect("/index_paycart")->with("success","Xóa Thành Công");
    }

   public function detailpay($id){
       $cart = Cart::where("pay_id" , $id)->get();
       $product = Product::all();

       return view("/admin/pay/detailpay" ,compact("cart" , 'product'));
   }
}
