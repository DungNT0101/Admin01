<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleImage extends Model
{
    protected $table = 'sale_images';

    protected $fillable = [
        'sale_id', // Foreign key to Sale
        'path',    // Image file path
        'type',    // e.g. 'main', 'gallery'
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
