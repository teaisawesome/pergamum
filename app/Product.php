<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'description', 'theme', 'publisher', 'isbn', 'language', 'release_year', 'image' 
    ];
}
