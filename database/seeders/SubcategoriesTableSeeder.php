<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Predjelo',
        ]);
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Salate',
        ]);
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Glavno jelo',
        ]);
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Desert',
        ]);
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Pive',
        ]);
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Vina',
        ]);
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Alkoholna pića',
        ]);
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Bezalkoholna pića',
        ]);
        Subcategory::create([
            'category_id' => 2,
            'name' => 'Topli napitci',
        ]);
        Subcategory::create([
            'category_id' => 3,
            'name' => 'Cigarete',
        ]);
    }
}
