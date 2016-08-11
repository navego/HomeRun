<?php

use Illuminate\Database\Seeder;
use \App\ApartmentType;

class ApartmentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$apartment_type = ApartmentType::create([
			'name' => 'דירת 3 חדרים',
		]);
		
		$apartment_type = ApartmentType::create([
			'name' => 'דירת גן',
		]);
    }
}
