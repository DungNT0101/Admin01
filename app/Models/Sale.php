<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{

    protected $table = 'sales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'type',
        'title',
        'slug', // add slug for saving slug by title
        'address',
        'type_property',
        'content',
        'price',
        'area',
        'equivalent_value',
        'law',
        'bedroom',
        'bathroom',
        'direction',
        'front',
        'road',
        'video',
        'maps',
        'zalo',
        'facebook',
        'favorite',
        // 'images', // handled by relationship or separate table
        // 'gallery_images', // handled by relationship or separate table
    ];

    public function images()
    {
        return $this->hasMany(\App\Models\SaleImage::class, 'sale_id');
    }

}
