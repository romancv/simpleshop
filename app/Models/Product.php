<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $attributes = [
        'title' => 'Untitled',
        'price' => 0.0,
        'stock' => 0,
        'rating' => 0,
        'body' => '',
        'public' => false,
        'category_id' => null,
    ];

    protected $fillable = ['title', 'body', 'stock', 'price', 'public'];

    public function scopePublic($query)
    {
        return $query
                ->wherePublic(true)
                ->whereNotNull('category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category() {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

    public function imageHref(bool $thumb = false): string {

        if(count($this->images) > 1) {
            return $thumb ? $this->images[1]->href : $this->images[0]->href;
        }

        $demo = [
            '/img/product-img/product1.jpg',
            '/img/product-img/product2.jpg',
        ];

        if(!empty($this->images)) {
            return $thumb ? $this->images[0]->href : $demo[0];
        }

        return $thumb ? $demo[1] : $demo[0];
    }
}
