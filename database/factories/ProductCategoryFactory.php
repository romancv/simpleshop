<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductCategoryFactory extends Factory
{
    use RefreshDatabase;

    // Demo category cover images
    private const LOREM_HREFS = [
        'img/bg-img/1.jpg',
        'img/bg-img/2.jpg',
        'img/bg-img/3.jpg',
        'img/bg-img/4.jpg',
        'img/bg-img/5.jpg',
        'img/bg-img/6.jpg',
        'img/bg-img/7.jpg',
        'img/bg-img/8.jpg',
        'img/bg-img/9.jpg',
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'image_href' => $this->faker->randomElement(self::LOREM_HREFS),
        ];
    }
}
