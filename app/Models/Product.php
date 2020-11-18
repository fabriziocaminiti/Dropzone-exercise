<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable =['name','brand','description','price'];

    public function Images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
