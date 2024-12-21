<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'cat_id',
        'brand_id',
        'size',
        'code',
        'short_desc',
        'long_desc',
        'old_price',
        'new_price',
        'quantity',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function brands()
    {
        return $this->belongsTo( Brand::class,'brand_id');
    }
}
