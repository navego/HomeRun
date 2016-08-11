<?php

namespace App\Http\Controllers\Homerun;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Project;
use App\Firm;

class ProjectController extends Controller {
    
    public function getCreateProject() {
    	// get firm id in order to show only projects that belong to this firm
    	// we can get the firm according to the user id
    	// we can get the user id from $user = Auth::user();
    	// for testing, assume id=1
    	$firm = Firm::where('id', Auth::user()->id)->first();
    	$projects = Project::where('firm_id', $firm->id)->get();
    	//$projects = Project::where('firm_id', 1)->get();
        return view('homerun.create_project', ['projects' => $projects]);
    }
    
	public function postCreateProject(Request $request) {
		// get firm id in order to show only projects that belong to this firm
    	// we can get the firm according to the user id
    	// we can get the user id from $user = Auth::user();
    	// for testing, assume id=1
    	$firm = Firm::where('id', Auth::user()->id)->first();
    	
	    $project = new Project();
	    $project->name = $request['projectName'];
	    $project->city = $request['city'];
	    $project->street = $request['street'];
	    $project->number_of_buildings = $request['numOfBuildings'];
	    //$project->firm_id = $request['firm'];
	    //$project->firm_id = 1;
	    $project->firm_id = $firm->id;
	    $project->save();
		return redirect()->route('project.create');
	}
}
