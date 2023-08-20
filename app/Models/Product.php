<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "mahang",
            "name",
            "hinhanh",
            "price",
            "old_price",
            "brand",
            "khoiluong",
            "desription",
            "danhmuc",
            "tinhtrang_id",
            "active"
    ];
    // public function size (){
    //     return $this->hasMany(Size::class);
    // }
    // public function color (){
    //     return $this->hasMany(Color::class);
    // }
    // public function colorproduct()  {
    //     return $this->belongsToMany(Color::class, table:"product_colors",foreignPivotKey:"color_id" ,relatedPivotKey: "product_id");
    // }
    // public function colors()  {
    //     return $this->belongsToMany(Color::class );
    //         }
            // public function sizes()  {
            //     return $this->belongsToMany(Size::class );
            //         }
    public function brand(){
        return  $this->belongsTo(Brand::class);
    }

    public function category(){
        return  $this->belongsTo(Category::class);
    }
    public function colors(){
        return  $this->belongsTo(Color::class);
    }
    public function sizes(){
        return  $this->belongsTo(Size::class);
    }
    public function carts(){
        return  $this->belongsTo(Cart::class);
    }

    // protected $table = 'products';

    // public function chungdans()
    // {
    //     return $this->hasMany(chungdan::class, 'product_id');
    // }
}
