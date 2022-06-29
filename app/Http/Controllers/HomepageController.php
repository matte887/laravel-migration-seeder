<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomepageController extends Controller {
    public function index() {
        $trains = Train::all();
        // dd($trains);
        return view('home', compact("trains"));
    }
}
