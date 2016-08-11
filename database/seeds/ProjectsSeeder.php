<?php

use Illuminate\Database\Seeder;
use \App\Firm;
use \App\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firm = Firm::all()->first();
		$project = Project::create([
		    'name' => 'פרוייקט דוגמה',
			'city' => 'חדרה',
			'street' => 'הרצל',
			'number_of_buildings' => '1',
			'firm_id' => $firm->id,
		]);
    }
}
