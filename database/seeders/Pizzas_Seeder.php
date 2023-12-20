<?php

namespace Database\Seeders;

use App\Models\pizzas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pizzas_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pizzas::insert([
            'id' => 1,
            'name' => 'Pizza Margherita',
            'beschrijving' => 'Margarita: Tomatensaus, Mozzarella, Olijfolie, Basilicumblaadjes.
            Een klassieke combinatie van smaken, perfect gebakken voor de liefhebbers van eenvoud en authenticiteit.',
        ]);
        pizzas::insert([
            'id' => 2,
            'name' => 'Pizza Bolognese',
            'beschrijving' => 'Bolognese: Bolognesesaus, Mozzarella.
            Een hartige smaakexplosie met rijke Bolognesesaus en romige mozzarella, perfect voor liefhebbers van Italiaanse comfortfood',
        ]);
        pizzas::insert([
            'id' => 3,
            'name' => 'Pizza Funghi',
            'beschrijving' => 'Pizza Funghi: Tomatensaus, Mozzarella, Verse Champignons.
            Een heerlijke combinatie van tomatensaus, romige mozzarella en verse champignons, voor de liefhebbers van een smaakvolle en hartige pizza-ervaring',
        ]);
        pizzas::insert([
            'id' => 4,
            'name' => 'Pizza Pepperoni',
            'beschrijving' => 'Pizza Pepperoni: Tomatensaus, Mozzarella, Olijfolie, Basilicumblaadjes, Pepperoni.
            Ontdek onze Pepperoni Pizza met pittige pepperoni, smeuïge mozzarella, en verse basilicum op een heerlijke tomatensaus.
             Een smaakvolle ervaring die je zintuigen zal prikkelen',
        ]);
    }
}
