<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BooksTableSeeder;
use Database\Seeders\CategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
