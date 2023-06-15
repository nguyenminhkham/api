<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_Course;
use Illuminate\Support\Str;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_course = new User_Course();
        $user_course->id = Str::uuid();
        $user_course->user_id = 'a1b3949a-0589-40a0-bad3-212ce704aafb';
        $user_course->course_id = 'ed8ca9a4-2a6a-47ec-8674-dbb5d61c0e3e';
        $user_course->save();
    }
}
