<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

// Main controller for redirecting pages
class mainController extends Controller
{
    public function loadIndex() {
        return view('index');
    }
    public function loadAbout() {
        return view('about');
    }
    public function loadTeam() {
        $users = User::all();
        return view('team', compact('users'));
    }
    public function loadContact() {
        return view('contact');
    }
    public function loadRegister() {
        return view('register');
    }
    public function loadLogin() {
        return view('login');
    }
    public function loadMembers() {
        return view('members');
    }
}
