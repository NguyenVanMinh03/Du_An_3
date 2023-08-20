<?php

namespace App\Http\Controllers;

use App\Http\Services\CardService;
use App\Models\Pay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Paycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $cardService;
    public function __construct(CardService $cardService) {
$this->cardService=$cardService;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = $this->cardService->getProducts();
        $carts = Session::get('carts');
        return view("home/pay",compact("products","carts"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $name  = $request->input("name");
      $city  = $request->input("city");
      $address  = $request->input("address");
      $pay  = $request->input("pay");
      $phone  = $request->input("phone");
      $email  = $request->input("email");

      $data =[
        "name" => $name,
        "city"=>$city,
        "address"=>$address,
        "pay"=>$pay,
        "phone"=>$phone,
        "email"=>$email,
      ];

      $pay = Pay::create($data);

      return redirect("/pay")->with("suscess", "Thanh Toán Thành Công");
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
