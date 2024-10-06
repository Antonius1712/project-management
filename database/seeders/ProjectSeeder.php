<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\PaymentStatus;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Project::factory(10)->create();
        $categories = Category::all();
        $clients = Client::all();
        $developers = User::all();
        $payments = PaymentStatus::all();

        for( $a = 0; $a < 100; $a++ ){
            Project::create([
                'category_id' => $categories->shuffle()->take(1)[0]->id,
                'client_id' => $clients->shuffle()->take(1)[0]->id,
                'developer_id' => $developers->shuffle()->take(1)[0]->id,
                'payment_status_id' => $payments->shuffle()->take(1)[0]->id,
                'name' => fake()->name(),
                'start_date' => now(),
                'end_date' => now(),
                'description' => fake()->text(),
                'notes' => fake()->text(),
            ]);
        }
    }
}