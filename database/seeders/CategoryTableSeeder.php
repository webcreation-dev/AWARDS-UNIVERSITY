<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Meilleur jeune Artiste',
            'image' => 'category1.svg',
        ]);
        Category::create([
            'name' => 'Meilleur jeune graphiste',
            'image' => 'category2.svg',
        ]);
        Category::create([
            'name' => 'Meilleure Femme Entreprenante',
            'image' => 'category3.svg',
        ]);
        Category::create([
            'name' => 'Meilleur jeune footballeur',
            'image' => 'category4.svg',
        ]);
        Category::create([
            'name' => 'Meilleur jeune Dévot',
            'image' => 'category5.svg',
        ]);
        Category::create([
            'name' => 'Meilleur jeune basketteur',
            'image' => 'category6.svg',
        ]);
        Category::create([
            'name' => 'Meilleur Web communicateur',
            'image' => 'category7.svg',
        ]);
        Category::create([
            'name' => 'Meilleur Acteur théâtral',
            'image' => 'category8.svg',
        ]);
        Category::create([
            'name' => 'Meilleur jeune Influenceur dynamique',
            'image' => 'category9.svg',
        ]);
        Category::create([
            'name' => 'Meilleur jeune Danseur',
            'image' => 'category10.svg',
        ]);

    }
}
