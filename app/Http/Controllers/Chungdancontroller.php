<?php

namespace App\Http\Controllers;

use App\Models\chungdan;
use Illuminate\Http\Request;

class Chungdancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chungDans = chungdan::with('products', 'colors')->get();

        // Gửi dữ liệu đến view và hiển thị nó
        return view('/', compact('chungDans'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     
            // Truy vấn dữ liệu từ bảng ChungDan cùng với thông tin từ bảng Product và Color cho sản phẩm có ID cụ thể
            $product = chungdan::with('product', 'color')->find($id);
    
            // Gửi dữ liệu đến view và hiển thị nó
            return view('home/detail_product', compact('product'));
        
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
