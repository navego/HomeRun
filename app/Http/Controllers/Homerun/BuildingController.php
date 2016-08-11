<?php

namespace App\Http\Controllers\Homerun;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Firm;
use App\Project;
use App\Building;

class BuildingController extends Controller {
    
    public function getCreateBuilding() {
    	// get firm id in order to show only projects that belong to this firm
    	// we can get the firm according to the user id
    	// we can get the user id from $user = Auth::user();
    	// for testing, assume user id=1
    	$firm = Firm::where('id', Auth::user()->id)->first();
    	$projects = Project::where('firm_id', $firm->id)->get();
    	$buildings = Building::where('project_id', $projects->first()->id)->get();
        return view('homerun.create_building', ['projects' => $projects, 'buildings' => $buildings]);
    }
    
	public function postCreateBuilding(Request $request) {
		// get project_id
    	// for testing, assume id=1
    	$firm = Firm::where('id', Auth::user()->id)->first();
    	$project_name = $request->input('project_select');
    	//$project_name = $request['project_select'];
    	$project = Project::where('firm_id', $firm->id)->where('name', $project_name)->first();
    	//$project = Project::where('firm_id', $firm->id)->first();
    	
	    $building = new Building();
	    $building->street_num = $request['street_num'];
	    $building->number_of_floors = $request['number_of_floors'];
	    $building->number_of_apartments = $request['number_of_apartments'];
	    $building->ground_floor = $request->input('groundFloorRadios');
	    //$building->project_id = 1;
	    $building->project_id = $project->id;
	    $building->save();
		return redirect()->route('building.create');
	}
}
