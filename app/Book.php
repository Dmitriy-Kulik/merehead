<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'author', 'year', 'number_of_pages', 'description', 'img', 'category_id', 'quantity'];

    public function category()
    {
        return $this->hasMany(Category::class, 'id');
    }
}
