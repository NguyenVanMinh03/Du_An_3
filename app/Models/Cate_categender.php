<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate_categender extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'category_gender_id'
    ];
}
