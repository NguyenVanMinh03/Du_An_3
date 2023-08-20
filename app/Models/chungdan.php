<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class chungdan extends Model
{
    use HasFactory;
protected $table = "product_color";
// protected $table = "product_size";


public function products()
{
    return $this->belongsTo(Product::class, 'product_id');
}

public function colors()
{
    return $this->belongsTo(Color::class, 'color_id');
}
public function sizes()
{
    return $this->belongsTo(Size::class, 'size_id');
}
}
