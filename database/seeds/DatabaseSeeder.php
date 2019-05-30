<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'John',
            'last_name' => 'Hansmen',
        ]);
        DB::table('recommendations')->insert([
            'text' => 'John is a really good programmer, I recommend him for PHP developement',
            'author' => 'Dilbert Mohon',
            'user_id' => 1,
        ]);
        DB::table('course_user')->insert([
            'user_id' => 1,
            'course_id' => 1,
        ]);
        DB::table('course_user')->insert([
            'user_id' => 1,
            'course_id' => 2,
        ]);
        DB::table('courses')->insert([
            'name' => 'Beginner PHP Course, Learn To Swim In Web Developement Waters',
            'experience_points' => 100,
            'completed' => 1,
            'mastery' => 'beginner',
            'skill' => 'php',
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate Java Course, Become a Java Guru',
            'experience_points' => 100,
            'completed' => 1,
            'mastery' => 'intermediate',
            'skill' => 'java',
        ]);
        DB::table('certificate_user')->insert([
            'user_id' => 1,
            'certificate_id' => 1,
        ]);
        DB::table('certificate_user')->insert([
            'user_id' => 1,
            'certificate_id' => 2,
        ]);
        DB::table('certificates')->insert([
            'name' => 'PHP Mastery Certificate',
            'author' => 'John Smith',
        ]);
        DB::table('certificates')->insert([
            'name' => 'Java Certificate of Approval',
            'author' => 'John Johnson',
        ]);
        DB::table('achievement_user')->insert([
            'user_id' => 1,
            'achievement_id' => 1,
        ]);
        DB::table('achievement_user')->insert([
            'user_id' => 1,
            'achievement_id' => 2,
        ]);
        DB::table('achievements')->insert([
        'name' => 'Achievement 1',
        ]);
        DB::table('achievements')->insert([
            'name' => 'Achievement 2',
        ]);
    }
}
