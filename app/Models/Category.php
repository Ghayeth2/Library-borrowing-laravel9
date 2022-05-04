<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Category extends Model
{
    use HasFactory;
    // One to many
    public function books(){
        return $this->hasMany(Book::class);
    }
    //one to many inverse
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
    //one to many
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}
