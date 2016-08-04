<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Role::create([
			'name' => 'Admin',
			'display_name' => 'Admin',
			'description' => 'System administrator.',
			'removable' => false,
		]);

		Role::create([
			'name' => 'User',
			'display_name' => 'User',
			'description' => 'Default system user.',
			'removable' => false,
		]);
		
		Role::create([
			'name' => 'Manager',
			'display_name' => 'מנהל חברה',
			'description' => 'מנהל חברה',
			'removable' => true,
		]);
		
		Role::create([
			'name' => 'Coordinator',
			'display_name' => 'מתאם/ת',
			'description' => 'מתאמ/ת',
			'removable' => true,
		]);
		
		Role::create([
			'name' => 'Tenant',
			'display_name' => 'דייר',
			'description' => 'דייר',
			'removable' => true,
		]);
	}
}
