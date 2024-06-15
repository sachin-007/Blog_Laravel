<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'sachn',
            'email' => 'sachn@gmail.com',
            'id'=> 1,
            'password'=> bcrypt("12345678")
        ]);

        // classname_for_model :: factory( how_make_no.of_data )  
        Blog::factory(100)->create();
    }
}
