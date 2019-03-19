<?php

namespace App\Repositories\Backend\Room;

use DB;
use Carbon\Carbon;
use App\Models\Room\Room;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomRepository.
 */
class RoomRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Room::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin(config('module.locations.table'), config('module.locations.table').'.id', '=', config('module.rooms.table').'.location_id')
            ->select([
                config('module.rooms.table').'.id',
                config('module.rooms.table').'.name as room_name',
                config('module.rooms.table').'.price',
                config('module.rooms.table').'.image_name',
                config('module.rooms.table').'.created_at',
                config('module.rooms.table').'.updated_at',
                config('module.locations.table').'.name as location_name',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $input['features'] = json_encode($input['features']);
        if (Room::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.rooms.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Room $room
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Room $room, array $input)
    {
        $input['features'] = json_encode($input['features']);
    	if ($room->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.rooms.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Room $room
     * @throws GeneralException
     * @return bool
     */
    public function delete(Room $room)
    {
        if ($room->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.rooms.delete_error'));
    }
}
