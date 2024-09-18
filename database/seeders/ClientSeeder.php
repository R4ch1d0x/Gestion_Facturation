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
        //
        Client::factory()->count(30)->hasFactures(1)->create();
        Client::factory()->count(1)->hasFactures(0)->create();

    }
}
