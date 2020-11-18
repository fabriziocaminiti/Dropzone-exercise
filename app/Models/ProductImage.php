<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    protected $fillable =['src'];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
