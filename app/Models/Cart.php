<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
       "pay_id",
"product_id",
"price",
"soluong",
"tong",
    ];


    public function Pays (){
        return $this->belongsTo(Pay::class);
    }
}
