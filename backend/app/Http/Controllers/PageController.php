<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

    public function index() {
        return view('index');
    }

    public function signin() {
        return view('pages.signin');
    }

    public function categorieslist() {
        return view('pages.categorieslist');
    }

    public function singlepost() {
        return view('pages.singlepost');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
}
