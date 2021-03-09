<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    // Demo product images
    private const LOREM_HREFS = [
        '/img/product-img/product1.jpg',
        '/img/product-img/product2.jpg',
        '/img/product-img/product3.jpg',
        '/img/product-img/product4.jpg',
        '/img/product-img/product5.jpg',
        '/img/product-img/product6.jpg',
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'href' => $this->faker->randomElement(self::LOREM_HREFS),
        ];
    }
}
