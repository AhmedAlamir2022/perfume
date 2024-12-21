<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'product_id',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
