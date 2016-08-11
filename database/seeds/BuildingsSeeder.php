<?php

use Illuminate\Database\Seeder;
use \App\Project;
use \App\Building;

class BuildingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::all()->first();
		$building = Building::create([
			'street_num' => '10',
			'number_of_floors' => '8',
			'number_of_apartments' => '22',
			'ground_floor' => '0',
			'project_id' => $project->id,
		]);
    }
}
