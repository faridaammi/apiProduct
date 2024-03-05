<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->words(4, true),
            'description' => $this->faker->sentence(10),
            'lien_image' => $this->faker->imageUrl(200, 200, 'Product', true),
            'prix' => $this->faker->randomFloat(2, 10, 1000),
            'tva' => $this->faker->randomFloat(2, 10, 10)
        ];
    }
}
