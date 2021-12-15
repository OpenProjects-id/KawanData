<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'kawandata.id@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('kawandata'),
            'handphone_number' => '081572697825',
            'is_admin' => true
        ]);
    }
}
