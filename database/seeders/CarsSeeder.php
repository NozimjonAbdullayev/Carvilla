<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    Cars::create([
    //     'photo' => null,
    //     'model' => 'test Model 1',
    //     'title' => 'test title 1',
    //     'price' => '20000$',
    //     'description' => 'Lorem ipsmu dolor sit amet'
    //    ]) ;
    //    Cars::create([
    //     'photo' => null,
    //     'model' => 'test Model 2',
    //     'title' => 'test title 2',
    //     'price' => '20000$',
    //     'description' => 'Lorem ipsmu dolor sit amet'
    //    ]) ;
    Cars::factory()->count(10)->create();
    }
}
