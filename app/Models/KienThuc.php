<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KienThuc extends Model
{

    protected $table = 'kien_thuc';

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
        'avatar',
        'type',
        'hot',
        'home',
        'content',
        'updated_by'
    ];



}
