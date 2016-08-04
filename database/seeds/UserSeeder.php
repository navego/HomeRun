<?php

use App\Role;
use App\Support\Enum\UserStatus;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user = User::create([
			'first_name' => 'EasyAdmin',
			'email' => 'admin@example.com',
			'username' => 'admin',
			'password' => 'admin123',
			'avatar' => null,
			'country_id' => null,
			'status' => UserStatus::ACTIVE,
		]);

		$admin = Role::where('name', 'Admin')->first();

		$user->attachRole($admin);
		$user->socialNetworks()->create([]);
		
		$user = User::create([
			'first_name' => 'מנהלי',
			'email' => 'manager@example.com',
			'username' => 'manager',
			'password' => 'manager123',
			'avatar' => null,
			'country_id' => null,
			'status' => UserStatus::ACTIVE,
		]);

		$role = Role::where('name', 'Manager')->first();

		$user->attachRole($role);
		$user->socialNetworks()->create([]);
		
		$user = User::create([
			'first_name' => 'מתאמי',
			'email' => 'coordinator@example.com',
			'username' => 'coordinator',
			'password' => 'coordinator123',
			'avatar' => null,
			'country_id' => null,
			'status' => UserStatus::ACTIVE,
		]);

		$role = Role::where('name', 'Coordinator')->first();

		$user->attachRole($role);
		$user->socialNetworks()->create([]);
		
		$user = User::create([
			'first_name' => 'דיירי',
			'email' => 'tenant@example.com',
			'username' => 'tenant',
			'password' => 'tenant123',
			'avatar' => null,
			'country_id' => null,
			'status' => UserStatus::ACTIVE,
		]);

		$role = Role::where('name', 'Tenant')->first();

		$user->attachRole($role);
		$user->socialNetworks()->create([]);
	}
}
