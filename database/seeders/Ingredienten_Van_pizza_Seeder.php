<?php

namespace Database\Seeders;

use App\Models\ingredientenpizza;
use App\Models\pizzas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ingredienten_van_pizza_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        {
            // Pizza Margherita Ingredients
            ingredientenpizza::find(1)->ingredienten()->attach([
                1 => ['amount' => 1], // Tomaten Saus
                3 => ['amount' => 1], // Mozzarella
                4 => ['amount' => 1], // Basilicum Blaadjes
            ]);

            // Pizza Bolognese Ingredients
            ingredientenpizza::find(2)->ingredienten()->attach([
                2 => ['amount' => 1], // Bolognese Saus
                3 => ['amount' => 1], // Mozzarella
            ]);

            // Pizza Funghi Ingredients
            ingredientenpizza::find(3)->ingredienten()->attach([
                1 => ['amount' => 1], // Tomaten Saus
                3 => ['amount' => 1], // Mozzarella
                5 => ['amount' => 1], // Verse Champignons
            ]);

            // Pizza Pepperoni Ingredients
            ingredientenpizza::find(5)->ingredienten()->attach([
                1 => ['amount' => 1], // Tomaten Saus
                3 => ['amount' => 1], // Mozzarella
                4 => ['amount' => 1], // Basilicum Blaadjes
                6 => ['amount' => 1], // Pepperoni
            ]);
        }
    }
}
