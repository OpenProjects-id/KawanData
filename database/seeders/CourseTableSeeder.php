<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'title' => 'Basic Python',
                'slug' => 'basic-python',
                'price' => 0,
                'thumbnail' => 'https://res.cloudinary.com/silv/image/upload/v1640660614/basic-python.png',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Basic Data Science',
                'slug' => 'basic-data-science',
                'price' => 0,
                'thumbnail' => 'https://res.cloudinary.com/silv/image/upload/v1640660699/basic-data-science.jpg',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st method
        // foreach ($courses as $key => $course) {
        //     Course::create($course);
        // }

        // 2nd method
        Course::insert($courses);
    }
}
