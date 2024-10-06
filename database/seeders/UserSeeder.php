<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Antonius Christian',
            'email' => 'antonius1712@gmail.com',
            'password' => 'Thisisbullshit1'
        ])->syncRoles(RoleEnum::DEVELOPER);

        User::factory()->create([
            'name' => 'Dea Carissa',
            'email' => 'deacarissa@gmail.com',
            'password' => 'deacarissa'
        ])->syncRoles(RoleEnum::ADMINISTRATOR);

        User::factory()->create([
            'name' => 'Yohana Felicia',
            'email' => 'yohanafelicia@gmail.com',
            'password' => 'yohanafelicia'
        ])->syncRoles(RoleEnum::USER);
    }
}