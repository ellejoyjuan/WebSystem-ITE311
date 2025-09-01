<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
public function run()
{
    $data = [
        [
            'name'     => 'Admin User',
            'email'    => 'admin123@example.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role'     => 'admin',
        ],
        [
            'name'     => 'Ellen Joy Juan',
            'email'    => 'Ellenjoy@student.com',
            'password' => password_hash('student123', PASSWORD_DEFAULT),
            'role'     => 'student',
        ],
        [
            'name'     => 'Wakwak',
            'email'    => 'wakwak@instructor.com',
            'password' => password_hash('teach123', PASSWORD_DEFAULT),
            'role'     => 'instructor',
        ],
    ];

    $this->db->table('users')->insertBatch($data);
}

}