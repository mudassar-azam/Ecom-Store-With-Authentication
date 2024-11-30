<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'title', 
        'description', 
        'price', 
        'discount', 
        'review', 
        'category_id',
        'user_id',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
