<?php

use Illuminate\Database\Seeder;

class LessonTableSeeder2 extends Seeder
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
