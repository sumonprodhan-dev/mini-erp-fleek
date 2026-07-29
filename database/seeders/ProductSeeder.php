<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['sku' => 'PRD-001', 'name' => 'Dell Latitude Laptop', 'unit' => 'Pcs', 'current_stock' => 15],
            ['sku' => 'PRD-002', 'name' => 'Logitech Wireless Mouse', 'unit' => 'Pcs', 'current_stock' => 50],
            ['sku' => 'PRD-003', 'name' => 'A4 Paper Rim', 'unit' => 'Box', 'current_stock' => 100],
            ['sku' => 'PRD-004', 'name' => 'Mechanical Keyboard', 'unit' => 'Pcs', 'current_stock' => 20],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
