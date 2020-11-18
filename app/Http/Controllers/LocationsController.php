<?php

namespace App\Http\Controllers;

use App\Apartment;
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
        return Location::paginate(5);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'city' => 'required|string',
            'address' => 'required|string|unique:locations',
            'number_of_apartments' => 'required|numeric',
            'tax_number' => 'required|numeric|unique:locations',
            'id_number' => 'required|numeric|unique:locations',
            'meta' => 'sometimes|array'
        ]);

        $location = Location::create($data);

        if(isset($data['meta'])) {
            $this->createLocationMeta($data['meta'], $location);
        }
        $this->createApartments($location);

        return back();
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
     * @param \Illuminate\Http\Request $request
     * @param \App\Location $location
     * @return string
     */
    public function update(Request $request, Location $location)
    {
        $data = $request->validate([
            'city' => 'string',
            'address' => 'string|unique:locations',
            'number_of_apartments' => 'numeric',
            'tax_number' => 'numeric|unique:locations',
            'id_number' => 'numeric|unique:locations'
        ]);

        $location->update($data);

        // da se doda brisanje ili dodavanje stanova ako je admin promenio number_of_apartments

        if(isset($request['meta'])) {
            $location->locationMeta()->delete();
            $this->createLocationMeta($request['meta'], $location);
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

    private function createLocationMeta($data, $location) {
        foreach ($data as $key => $value) {
            LocationMeta::create([
                'location_id' => $location->id,
                'field_name' => $value
            ]);
        }
    }

    private function createApartments($location) {
        $i = 1;
        while ($i <= $location->number_of_apartments) {
            Apartment::create([
                'apartment_number' => $i,
                'location_id' => $location->id
            ]);
            $i++;
        }
    }
}
