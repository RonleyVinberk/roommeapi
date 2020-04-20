<?php

namespace App\Http\Controllers\API;

use Validator;

use App\Models\Building;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\API\BaseController as BaseController;

class BuildingController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result_building = Building::all();
        return $this->sendResponse(200, $result_building->toArray());
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_input = $request->only('name', 'description');

        if ($request_input['description'] == '') {
            $request_input['description'] = 'Description not found';
        }

        $request_input['slug'] = str_slug($request_input['name'], '-');
        
        $request_input['created_by'] = Auth::user()->usertype;

        $validator = Validator::make($request_input, [
            'name' => 'required|unique:buildings',
            'description' => 'nullable'
        ]);

        if($validator->fails()){
            return $this->sendError(400, $validator->errors());     
        }
        else {
            if (!Building::create($request_input)) {
                return $this->sendError(500, 'Data can\'t saved. Please try again!');
            }
            return $this->sendResponse(201, '', 'Data has been successfully saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $result_building = Building::where('slug', $slug)->first();
        return $this->sendResponse(200, $result_building->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result_building = Building::find($id);

        $request_input = $request->only('name', 'description');

        if ($request_input['description'] == '') {
            $request_input['description'] = 'Description not found';
        }

        $request_input['slug'] = str_slug($request_input['name'], '-');
        $request_input['updated_by'] = Auth::user()->usertype;

        $validator = Validator::make($request_input, [
            'name' => 'required',
            'description' => 'nullable'
        ]);

        if($validator->fails()){
            return $this->sendError(400, $validator->errors());     
        }
        else {
            if (!$result_building->update($request_input)) {
                return $this->sendError(500, 'Data can\'t updated. Please try again!');
            }
            return $this->sendResponse(201, '', 'Data has been successfully updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $result_building = Building::find($id);
        if (!$result_building->delete()) {
            return $this->sendError(500, 'Data can\'t deleted. Please try again!');
        }
        return $this->sendResponse(204, '', 'Data has been successfully deleted');
    }
}
