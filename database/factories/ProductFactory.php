<?php

namespace Database\Factories;

use App\Models\{Product, ProductCategory};
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'body' => $this->faker->paragraph,
            'stock' => $this->faker->numberBetween(1, 15),
            'price' => $this->faker->numberBetween(1000, 15000, 0.1),
            'public' => true,
        ];
    }
}
