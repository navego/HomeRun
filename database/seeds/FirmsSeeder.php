<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Firm;

class FirmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

	public function run() {
	    $role = Role::where('name', 'Manager')->first();
	    $user = $role->users()->first();
		$firm = Firm::create([
			'name' => 'Evil Corp',
			'user_id' => $user->id,
		]);
	}
}
