<?php

// database/seeds/LessonTableSeeder.php
use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lesson::truncate();
        factory(App\Lesson::class, 30)->create();
    }
}