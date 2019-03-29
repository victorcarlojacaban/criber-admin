<?php

namespace App\Http\Responses\Backend\Room;

use App\Models\Room\Room;
use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Room\Room
     */
    protected $rooms;

    protected $features;

    protected $locations;

    /**
     * @param App\Models\Room\Room $rooms
     */
    public function __construct($rooms, $features, $locations)
    {
        $this->rooms     = $rooms;
        $this->features  = $features;
        $this->locations = $locations;
    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        $roomData = $this->rooms->toArray();

        $selectedFeatures = json_decode($roomData['features']);

        $selectedStatus = json_decode($roomData['status']);

        $status = Room::$statusArray;

        return view('backend.rooms.edit')->with([
            'room'      => $this->rooms,
            'locations' => $this->locations,
            'features'  => $this->features,
            'status'    => $status,
            'selectedFeatures' => $selectedFeatures ?? null,
            'selectedStatus'   => $selectedStatus ?? null,
        ]);
    }
}