<?php

namespace App\Http\Controllers\Homerun;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use App\Firm;

class FirmController extends Controller {
	
	public function getCreateFirm() {
        return view('homerun.create_firm');
    }
    
	public function postCreateFirm(Request $request) {
		$firm = new Firm();
		$firm->name = $request['firmName'];
		$firm->city = $request['city'];
		$firm->street = $request['street'];
		$firm->street_num = $request['street_num'];
		$firm->po_box = $request['pox_box'];
		$firm->zip = $request['zip'];
		$firm->phone = $request['phone'];
		$firm->email = $request['email'];
		//$firm->user_id = '2';
		$firm->user_id = Auth::user()->id;
        $firm->save();
		return redirect()->route('project.create');
	}
}
