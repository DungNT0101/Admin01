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
        'code',
        'type',
        'title',
        'slug',
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
        'owner_type',
        'property_code',
        'status',
        'phone',
        'hot',
        'my_note',
    ];

    const TYPE_LAND = 'Đất bán';
    const TYPE_HOUSE = 'Nhà bán';
    const ON_SALE = 'on_sale';
    const SOLD = 'sold';

    public function images()
    {
        return $this->hasMany(\App\Models\SaleImage::class, 'sale_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
