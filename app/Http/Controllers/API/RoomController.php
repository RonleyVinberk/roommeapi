<?php

namespace App\Http\Controllers\API;

use DB;

use Validator;

use App\Models\Room;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\API\BaseController as BaseController;

class RoomController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($building_id)
    {
        $result_room = DB::table('rooms')->select(
            'buildings.slug AS building_slug',
            'buildings.name AS building_name',
            'buildings.description AS building_description',
            'buildings.created_at AS building_created_at',
            'buildings.created_by AS building_created_by',
            'buildings.updated_at AS building_updated_at',
            'buildings.updated_by AS building_updated_by',
            
            'rooms.name AS room_name',
            'rooms.description AS room_description',
            'rooms.created_at AS rooms_created_at',
            'rooms.created_by AS rooms_created_by',
            'rooms.updated_at AS rooms_updated_at',
            'rooms.updated_by AS rooms_updated_by'
        )->join('buildings', 'rooms.building_id', '=', 'buildings.id')->where('buildings.id', '=', $building_id)->get();
        return $this->sendResponse(200, $result_room->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_input = $request->only('building_id', 'name', 'description');

        if ($request_input['description'] == '') {
            $request_input['description'] = 'Description not found';
        }

        $request_input['created_by'] = Auth::user()->usertype;
        
        $validator = Validator::make($request_input, [
            'building_id' => 'required',
            'name' => 'required',
            'description' => 'nullable'
        ]);

        if($validator->fails()){
            return $this->sendError(400, $validator->errors());     
        }
        else {
            if (!Room::create($request_input)) {
                return $this->sendError(400, 'Data can\'t saved. Please try again!');
            }
            return $this->sendResponse(201, '', 'Data has been successfully saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $building_id
     * @param int $room_id
     * @return \Illuminate\Http\Response
     */
    public function show($building_id, $room_id)
    {
        $result_room = DB::table('rooms')->select(
            'buildings.slug AS building_slug',
            'buildings.name AS building_name',
            'buildings.description AS building_description',
            'buildings.created_at AS building_created_at',
            'buildings.created_by AS building_created_by',
            'buildings.updated_at AS building_updated_at',
            'buildings.updated_by AS building_updated_by',
            
            'rooms.name AS room_name',
            'rooms.description AS room_description',
            'rooms.created_at AS rooms_created_at',
            'rooms.created_by AS rooms_created_by',
            'rooms.updated_at AS rooms_updated_at',
            'rooms.updated_by AS rooms_updated_by'
        )->join('buildings', 'rooms.building_id', '=', 'buildings.id')
        ->where('rooms.id', '=', $room_id)->where('buildings.id', '=', $building_id)->get();
        return $this->sendResponse(200, $result_room->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $building_id
     * @param  int  $room_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $building_id, $room_id)
    {
        $request_input = $request->only('building_id', 'name', 'description');

        if ($request_input['description'] == '') {
            $request_input['description'] = 'Description not found';
        }
        
        $request_input['updated_by'] = Auth::user()->usertype;

        $validator = Validator::make($request_input, [
            'building_id' => 'required',
            'name' => 'required',
            'description' => 'nullable'
        ]);

        if($validator->fails()){
            return $this->sendError(400, $validator->errors());     
        }
        else {
            if (!$result_room = DB::table('rooms')->select(
                'buildings.slug AS building_slug',
                'buildings.name AS building_name',
                'buildings.description AS building_description',
                
                'rooms.building_id',
                'rooms.name',
                'rooms.description',
                'rooms.updated_by'
            )
            ->join('buildings', 'rooms.building_id', '=', 'buildings.id')
            ->where('rooms.id', '=', $room_id)
            ->where('buildings.id', '=', $building_id)
            ->update(array(
                'rooms.building_id' => $request_input['building_id'],
                'rooms.name' => $request_input['name'], 
                'rooms.description' => $request_input['description'],
                'rooms.updated_by' => $request_input['updated_by']
            ))) {
                return $this->sendError(400, 'Data can\'t updated. Please try again!');
            }
            return $this->sendResponse(201, '', 'Data has been successfully updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $building_id
     * @param  int  $room_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($building_id, $room_id) 
    {
        if (!$result_room = DB::table('rooms')->select('buildings.id', 'rooms.building_id')
            ->join('buildings', 'rooms.building_id', '=', 'buildings.id')
            ->where('rooms.id', '=', $room_id)
            ->where('buildings.id', '=', $building_id)->delete()) {
            return $this->sendError(500, 'Data can\'t deleted. Please try again!');
        }
        return $this->sendResponse(204, '', 'Data has been successfully deleted');
    }
}
