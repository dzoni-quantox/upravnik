<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class PortalController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = Location::all();
        return view('portal.home')->with('locations', $locations);
    }
}
