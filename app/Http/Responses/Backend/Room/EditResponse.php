<?php

namespace App\Http\Responses\Backend\Room;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Room\Room
     */
    protected $rooms;

    /**
     * @param App\Models\Room\Room $rooms
     */
    public function __construct($rooms)
    {
        $this->rooms = $rooms;
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
        return view('backend.rooms.edit')->with([
            'rooms' => $this->rooms
        ]);
    }
}