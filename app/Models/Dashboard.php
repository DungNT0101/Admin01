<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{

    protected $table = 'dashboard';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'keywords',
        'description',
        'hotline',
        'zalo',
        'facebook',
        'google',
    ];

}
