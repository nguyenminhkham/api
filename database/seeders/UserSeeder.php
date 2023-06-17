<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 9; $i++){
            $user = new User;
            $user->id = Str::uuid();
            $user->name = $faker->name;
            $user->email = Str::slug($user->name).'@example.com';
            $user->password = Hash::make('123456789');
            $user->phone = $faker->phoneNumber;
            $user->save();
        }
    }
}
