<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable =[
        "name",
            "city",
            "address",
            "pay",
            "phone",
            "email",
    ];


    public function Carts(){
        return $this->belongsTo(Cart::class   );
    }
}
