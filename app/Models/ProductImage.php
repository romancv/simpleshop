<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    protected $attributes = [
        'product_id' => 0,
        'href' => '',
    ];

    protected $fillable = ['product_id', 'href'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
