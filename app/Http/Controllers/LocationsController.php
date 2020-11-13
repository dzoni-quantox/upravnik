<?php

namespace App\Http\Controllers;

use App\Location;
use App\LocationMeta;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Location::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'city' => 'required|string',
            'address' => 'required|string',
            'number_of_apartments' => 'required|numeric',
            'tax_number' => 'required|numeric',
            'id_number' => 'required|numeric'
        ]);

        $location = Location::create($data);

        if(isset($data['meta'])) {
            foreach ($data['meta'] as $key => $value) {
                LocationMeta::create([
                    'location_id' => $location->id,
                    'field_name' => $value
                ]);
            }
        }

        return 'OK';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     */
    public function show(Location $location)
    {
        $locationMeta = $location->locationMeta();

        return view('locations.show', compact(['location', 'locationMeta']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     */
    public function edit(Location $location)
    {
        return view('locations.edit', $location);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     */
    public function update(Request $request, Location $location)
    {
        $data = $request->validate([
            'city' => 'string',
            'address' => 'string',
            'number_of_apartments' => 'numeric',
            'tax_number' => 'numeric',
            'id_number' => 'numeric'
        ]);

        $location->update($data);

        if(isset($data['meta'])) {
            $location->locationMeta()->delete();
            foreach ($data['meta'] as $key => $value) {
                LocationMeta::create([
                    'location_id' => $location->id,
                    'field_name' => $value
                ]);
            }
        }

        return route('location.show', $location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return back();
    }
}
