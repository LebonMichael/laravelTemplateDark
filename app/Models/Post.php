<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post');
    }
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function postcomments(){
        return $this->hasMany(Comment::class);
    }
}
