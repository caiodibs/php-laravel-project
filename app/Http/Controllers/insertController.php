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
     * @param  id - User's id
     * @param  Request - The requestede data from form including the photo
     * @return redirect to team page
     */
    public function addMember($id, Request $request)
    {
        // Getting and storing image
        $imageName = $id.'-'.$request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/member',$imageName);

        // Saving the form data into table User
        $user = User::find($id);
        $user->description = $request->input('description');
        $user->is_team_member = 1;
        $user->photo = $imageName;
        $user->save();

        // Select all users to redirect back to team page
        $users = User::all();
        return redirect()->route('team', compact('users'));
    }
}
