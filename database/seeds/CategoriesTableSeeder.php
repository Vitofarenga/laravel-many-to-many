<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categoryNames = [
            'html',
            'funny',
            'sport',
            'news',
            'food',
            'movies',
            'js',
            'php',
            'laravel'
        ];
        foreach ($categoryNames as $categoryName) {
            $category = new Category();
            $category->name = $categoryName;
            $category->color = $faker->hexColor();
            $category->slug = Str::slug($categoryName, '-');
            $category->save();
        }
    }
}
