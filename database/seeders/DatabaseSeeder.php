<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            DepartmentSeeder::class,
            EmployeeSeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Sumon Prodhan',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
