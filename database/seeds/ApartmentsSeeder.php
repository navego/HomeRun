<?php

use Illuminate\Database\Seeder;
use \App\Role;
use \App\ApartmentType;
use \App\Building;
use \App\Apartment;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $role = Role::where('name', 'Tenant')->first();
	    $tenant = $role->users()->first();
	    $apartmentType = ApartmentType::all()->first();
	    $building = Building::all()->first();
		$apartment = Apartment::create([
			'floor_num' => '1',
			'apartment_num' => '3',
			'building_id' => $building->id,
			'apartmentType_id' => $apartmentType->id,
			'tenant_id' => $tenant->id,
		]);
    }
}
