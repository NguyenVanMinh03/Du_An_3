<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Color extends Model
{
    use HasFactory;
    protected $fillable =[
        "name"
    ];
    // protected $guarded =[];
    // public function colorproduct()  {
    //     return $this->belongsToMany(Product::class, table:"product_colors",foreignPivotKey:"color_id" ,relatedPivotKey: "product_id");
    // }


    // public function products(){
    //     return $this->belongsToMany(Product::class );
    //   }
    // public function products(){
    //     return  $this->belongsTo(Product::class);
    // }
    //elquenrelaytionship
    // protected $table = 'colors';

    // public function chungdans()
    // {
    //     return $this->hasMany(chungdan::class, 'color_id');
    // }
    
}
