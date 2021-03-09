<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Product, ProductCategory, ProductImage};

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Product::factory()->count(10)->create()->each(function ($product) {
            $category = ProductCategory::factory()->make();
            $product->category()->save($category);
            $product->category_id = $category->id;
            $product->save();

            ProductImage::factory()->count(4)->create()->each(function ($image) use ($product) {
                $image->product_id = $product->id;
                $image->save();
            });
        });
    }
}
