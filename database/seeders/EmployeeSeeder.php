<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            ['department_id' => 1, 'name' => 'John Doe', 'email' => 'john@gmail.com'],
            ['department_id' => 1, 'name' => 'Jane Smith', 'email' => 'jane@gmail.com'],
            ['department_id' => 2, 'name' => 'Rahim Uddin', 'email' => 'rahim@gmail.com'],
            ['department_id' => 3, 'name' => 'Karim Chowdhury', 'email' => 'karim@gmail.com'],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
