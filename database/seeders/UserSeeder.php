<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'nama' => 'John Doe',
                'nim' => '12345678',
                'kelas_id' => 1,
            ],
            [
                'nama' => 'Jane Smith',
                'nim' => '87654321',
                'kelas_id' => 2,
            ],
            [
                'nama' => 'Alice Johnson',
                'nim' => '11223344',
                'kelas_id' => 3,
            ],
        ];

        foreach ($users as $user) {
            UserModel::create($user);
        }
    }
}
