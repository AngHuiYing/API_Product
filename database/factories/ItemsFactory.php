<?php

namespace Database\Factories;

use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemsFactory extends Factory
{
    protected $model = Items::class;

    public function definition()
    {
        return [
            'item_name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
