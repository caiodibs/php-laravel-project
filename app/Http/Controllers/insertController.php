<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class insertController extends Controller
{
    /**
     * Insert a member into the team
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addMember($id, Request $request)
    {
        
        $imageName = $id.'-'.$request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/member',$imageName);
        $user = User::find($id);
        $user->description = $request->input('description');
        $user->is_team_member = 1;
        $user->photo = $imageName;
        $user->save();
        $users = User::all();
        return redirect()->route('team', compact('users'));
    }
}
