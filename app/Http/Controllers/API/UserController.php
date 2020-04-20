<?php

namespace App\Http\Controllers\API;

use Hash;
use Validator;

use App\User;

use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;

class UserController extends BaseController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result_user = user::all();
        return $this->sendResponse(200, $result_user->toArray());
    }
    
    /**
     * Registrasi by Superadmin or by self
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request_input = $request->only('email', 'usertype', 'password', 'confirm_password');

        $validator = Validator::make($request_input, [
            'usertype' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError(400, $validator->errors());
        }

        $request_input['password'] = Hash::make($request_input['password']);
        
        $user = User::create($request_input);
        if (!$user) {
            return $this->sendError(500, 'You can\'t register. Please try again!');
        } 
        else {
            $success['email'] = $user->email;
            $response['message'] = "Email with name ".$user->email ." has been successfully registered";
            return $this->sendResponse(201, $success, $response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result_user = User::find($id);
        return $this->sendResponse(200, $result_user->toArray());
    }

    /**
     * Updated by Superadmin or by self
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result_user = User::find($id);

        $request_input = $request->only('email', 'usertype', 'password', 'confirm_password');
            
        $validator = Validator::make($request_input, [
            'usertype' => 'required',
            'password' => 'nullable',
            'email' => 'required|email',
            'confirm_password' => 'nullable|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError(400, $validator->errors());
        }
        else {
            if ($request_input['password'] != '') {
                $request_input['password'] = Hash::make($request_input['password']);
                if (!$result_user->update($request_input)) {
                    return $this->sendError(500, 'Data can\'t updated. Please try again!');
                }
                return $this->sendResponse(201, '', 'Data has been successfully updated');
            }
            else {
                unset($request_input['password']);
                if (!$result_user->update($request_input)) {
                    return $this->sendError(500, 'Data can\'t updated. Please try again!');
                }
                return $this->sendResponse(201, '', 'Data has been successfully updated');
            }
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
        $result_user = User::find($id);
        if (!$result_user->delete()) {
            return $this->sendError(500, 'Data can\'t deleted. Please try again!');
        }
        return $this->sendResponse(204, '', 'Data has been successfully deleted');
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        
    }
}