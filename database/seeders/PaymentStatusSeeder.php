<?php

namespace Database\Seeders;

use App\Models\PaymentStatus;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PaymentStatus::factory(10)->create();
        $names = [
            'Unpaid',
            'Partially Paid',
            'Fully Paid',
        ];

        foreach( $names as $name ){
            PaymentStatus::create(['name' => $name]);
        }
    }
}
