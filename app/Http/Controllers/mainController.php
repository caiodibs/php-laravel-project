<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

// Main controller for redirecting pages
class mainController extends Controller
{
    /**
     * Index route
     *
     * @param  void
     * @return index route
     */
    public function loadIndex() {
        return view('index');
    }
    /**
     * About route
     *
     * @param  void
     * @return about route
    */
    public function loadAbout() {
        return view('about');
    }
    /**
     * Team route
     *
     * @param  void
     * @return team route with all user table collection
    */
    public function loadTeam() {
        $users = User::all();
        return view('team', compact('users'));
    }
    /**
     * Contact route
     *
     * @param  void
     * @return contact route
    */
    public function loadContact() {
        return view('contact');
    }
    /**
     * Register route
     *
     * @param  void
     * @return register route
    */
    public function loadRegister() {
        return view('register');
    }
    /**
     * Login route
     *
     * @param  void
     * @return login route
    */
    public function loadLogin() {
        return view('login');
    }
    /**
     * Member route
     *
     * @param  Id of the selected user
     * @return index route
    */
    public function loadMembers($id) {
        // Verifying if the id is valid
        if (isset($id)) {
            $user = User::find($id);
            return view('members', compact('user'));
        }else {
            return view('index');
        }
    }
}
