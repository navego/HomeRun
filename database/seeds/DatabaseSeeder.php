<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CountriesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FirmsSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(BuildingsSeeder::class);
        $this->call(ApartmentTypesSeeder::class);
        $this->call(ApartmentsSeeder::class);
        
        Model::reguard();
    }
}
