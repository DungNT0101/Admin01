<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'keywords',
        'description',
        'price',
        'sale_price',
        'avatar',
        'home',
        'hot',
        'content',
        'images',
        'category_id',
        'updated_by'
    ];



}
