<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            'Andy Wiranata' => '+66826320472',
            'Andrew' => '+628175100383'
        ];

        foreach( $name as $key => $val ){
            Client::create([
                'name' => $key,
                'contact' => $val
            ]);
        }

        // Client::factory(10)->create();
    }
}
