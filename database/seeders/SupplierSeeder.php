<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            ['name' => 'Tech Supplies Ltd', 'phone' => '01711000001'],
            ['name' => 'Global Office Stationeries', 'phone' => '01811000002'],
            ['name' => 'Apex IT Distributors', 'phone' => '01911000003'],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}
