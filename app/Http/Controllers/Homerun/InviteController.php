<?php

namespace App\Http\Controllers\Homerun;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Invite;

class InviteController extends Controller
{
    public function getSendInvite() {
        $invites = Invite::orderBy('created_at', 'desc')->get();
        return view('homerun.invite', ['invites' => $invites]);
    }
    
    public function postSendInvite(Request $request) {
        $invite = new Invite();
        $invite->firm_name = $request['firm_name'];
        $invite->coordinator_manager_name = $request['manager_name'];
        $invite->email = $request['email'];
        $invite->phone = $request['phone'];
        $invite->save();
        return redirect()->route('invite');
    }
}
