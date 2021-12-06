<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseBenefit;

class CourseBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseBenefits = [
            [
                'course_id' => 1,
                'name' => 'String & Operasi Matematika'
            ],
            [
                'course_id' => 1,
                'name' => 'Tipe Data'
            ],
            [
                'course_id' => 1,
                'name' => 'Kondisi dan Perulangan'
            ],
            [
                'course_id' => 1,
                'name' => 'Fungsi, Kelas, dan Try Catch'
            ],
            [
                'course_id' => 2,
                'name' => 'Pengenalan Library'
            ],
            [
                'course_id' => 2,
                'name' => 'Numpy'
            ],
            [
                'course_id' => 2,
                'name' => 'Pandas'
            ],
            [
                'course_id' => 2,
                'name' => 'Matplotlib'
            ],
        ];

        CourseBenefit::insert($courseBenefits);
    }
}
