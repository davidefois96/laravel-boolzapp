<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Message;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_inutile = [
            'sent',
            'received'
        ];

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Message::create([
                'text' => $faker->sentence,
                'status' => $array_inutile[array_rand($array_inutile)],
            ]);
        }
    }
}
