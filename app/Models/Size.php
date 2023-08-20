<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable =[
        "name"
    ];
    protected $guarded =[];
    // public function sizes(){
    //     return $this->belongsToMany(Size::class ,table:"product_size" , foreignPivotKey:"size_id" , relatedPivotKey:"product_id");
    // }

    // public function product()  {
    //     return $this->hasMany(Product::class );
    //         }
    //         public function chungdan()  {
    //             return $this->hasMany(chungdan::class ,"size_id" );
    //                 }


    //                 public function products(){
    //                     return  $this->belongsTo(Product::class);
    //                 }
}
