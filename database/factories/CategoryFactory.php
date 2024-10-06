<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            'E-Commerce',
            'Company Profile',
            'CMS / Content Management System',
            'ERP / Enterprise Resource Planning',
            'Gamble',
            'WebApp',
        ];

        return [
            'name' => array_rand($names),
        ];
    }
}
