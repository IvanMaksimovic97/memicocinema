<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function adminDisplay() {
        return view("pages.admin.display");
    }

    public function adminInsert() {
        return view("pages.admin.insert");
    }

    public function about() {
        return view('pages.about');
    }

    public function register() {
        return view('pages.register');
    }
}
