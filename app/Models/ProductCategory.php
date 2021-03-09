<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $attributes = [
        'title' => 'Untitled',
    ];

    protected $fillable = ['title'];

    public function products() {
        return $this->hasMany(Product::class, 'id', 'category_id'); // BUG ?
    }

    public function publicProducts() {
        return Product::public()
            ->whereCategoryId($this->id)
            ->orderBy('price', 'asc')
            ->limit(12)
        ;
    }

    public function scopeFeatured($query)
    {
        return $query->limit(10);
    }

    public function minPrice() {
        $q = $this->publicProducts();
        if($p = $q->first()) {
            return $p->price;
        }

        return 0.0;
    }
}
