<?php

use App\Models\ProducBrand;
use Illuminate\Database\Seeder;

class ProductBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProducBrand::class, 5)->create();
    }
}
