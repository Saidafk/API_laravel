<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'nom' => fake('fr_FR')->word() . ' ' . fake('fr_FR')->word(), // Combinaison de deux mots pour créer un nom de produit aléatoire en français
    'description' => fake('fr_FR')->text(), // Génère une description aléatoire en français
    'lien_image' => 'https://picsum.photos/200/300', // Image aléatoire de Picsum
    'prix' => fake('fr_FR')->randomFloat(2, 10, 500), // Prix entre 10 et 500 avec 2 décimales
    'tva' => fake('fr_FR')->randomElement([5.5, 10, 20]),
        ];
    }
}
