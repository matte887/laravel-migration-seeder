<?php

namespace App\Http\Controllers;

use App\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller {
    public function index() {
        $trains = Train::all();
        // dd($trains);
        return view('home', compact("trains"));
    }

    public function today() {
        $trains = Train::where('data_partenza', Carbon::today())->get();
        return view('today', compact('trains'));
    }
}
