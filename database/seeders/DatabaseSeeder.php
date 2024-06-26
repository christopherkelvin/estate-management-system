<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\estate;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user=User::factory()->create(   [
                'Fname'=>'Christopher',
                'Lname'=>'Mndeme',
                'email'=>'christopherkelvin100@gmail.com',
                'password'=>'1234'
            ]
        );
        estate::factory(30)->create(
            [
                'User_id'=>$user->id
            ]);
    }
}
