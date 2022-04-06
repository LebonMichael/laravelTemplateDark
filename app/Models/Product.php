<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function keywords()
    {
        return $this->morphToMany(Keyword::class, 'keywordable');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function scopeFilter($query, array $filters)
    {
        //if(isset($filters['search']) == false
        if ($filters['search'] ?? false) { //php 8
            $query
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('price', 'like', '%' . request('search') . '%');
        }
    }
}
