<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(10)->create();
        $names = [
            'E-Commerce',
            'Company Profile',
            'CMS / Content Management System',
            'ERP / Enterprise Resource Planning',
            'Gamble',
            'WebApp',
        ];

        foreach( $names as $name ){
            Category::create(['name' => $name]);
        }
    }
}
