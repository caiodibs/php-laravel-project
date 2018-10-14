<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function loadIndex() {
        return view('index');
    }
    public function loadAbout() {
        return view('about');
    }
    public function loadTeam() {
        return view('team');
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
}
