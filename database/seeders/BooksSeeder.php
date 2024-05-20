<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BooksSeeder extends Seeder
{
    
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('libri')->insert([
                'title' => fake()->words(rand(3, 10), true),
                'price' => rand(100, 350),
                'author' => fake()->name(),
                
            ]);
        }
    }
}