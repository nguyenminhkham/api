<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $courseNames = [
            'Solidworks cơ bản',
            'Solidworks nâng cao',
            'Inventor',
            'Creo'
        ];

        foreach ($courseNames as $name){
            $course = new Course;
            $course->id = Str::uuid();
            $course->name = $name;
            $course->description = $faker->text(200);
            $course->thumnail = 'https://images.squarespace-cdn.com/content/v1/5cec5f2384cb6f0001709918/1598927743706-Y4CX3V89D6E4V3CT3AG1/SW+Visualize+-+Mechanical+-+1.jpg?format=750w';
            $course->price = 1000000;
            $course->save();
        }
    }
}
