<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'first_name' => 'Abay',
        //     'last_name'=> 'Tesfaye',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([JobSeeder::class]);
    }
}
