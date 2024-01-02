<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landingPage() {
        return view('pages.landing-page');
    }

    public function dashboard() {
        $title = "Dashboard";
        $nav = "home";
        return view('pages.dashboard', compact([
            'title', 'nav'
        ]));
    }

    public function profile() {
        $title = "Profile";
        $nav = "profile";
        return view('pages.profile', compact([
            'title','nav'
        ]));
    }
}
