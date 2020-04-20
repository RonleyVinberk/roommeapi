<?php

namespace App\Http\Controllers\API;

use Validator;

use Carbon\Carbon;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\API\BaseController as BaseController;

class LoginController extends BaseController
{
    /**
     * Login user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request, User $user)
    {
        $request_input = $request->only("email", "password");

        $validator = Validator::make($request_input, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError(400, $validator->errors());
        } 
        else {
            if (Auth::attempt($request->only("email", "password"))) {
                $user = $request->user();
                $tokenResult = $user->createToken('Laravel Personal Access Client');

                $data = [
                    'access_token' => $tokenResult->accessToken,
                    'token_type' => 'Bearer',
                    'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
                ];
                return $this->sendResponse(200, $data, '');
            }
            else {
                return $this->sendError(400, 'These credentials do not match our records. Please try again!');
            }
        }
    }
}