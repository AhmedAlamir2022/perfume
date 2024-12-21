<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cat_id',
        'brand_id',
        'sale',
        'short_desc',
        'old_price',
        'new_price',
        'end_date',
        'image',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
