<?php

namespace App\Http\Controllers;

use App\Location;
use App\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of notifications.
     */
    public function index()
    {
        return Notification::paginate(5);
    }

    /**
     * Display a listing of notifications for a specific location.
     * @param $locationId
     * @return
     */
    public function getForLocation($locationId)
    {
        $location = Location::find($locationId);
        return $location->notifications;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notifications.create');
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
            'location_id' => 'required|numeric',
            'subject' => 'required|string',
            'text' => 'required|text'
        ]);

        Notification::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Notification $notification
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Notification $notification)
    {
        return view('notifications.show', $notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Notification $notification
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Notification $notification)
    {
        return view('notifications.edit', $notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     */
    public function update(Request $request, Notification $notification)
    {
        $data = $request->validate([
            'location_id' => 'required|numeric|required',
            'subject' => 'required|string',
            'text' => 'required|text'
        ]);

        $notification->update($data);

        return route('notification.show', $notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return back();
    }
}
