<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($code = '', $result = [], $message = '')
    {
        if ($result == '') {
            $response = [
                'code' => $code,
                'message' => $message
            ];
        }
        elseif ($message == '') {
            $response = [
                'code' => $code,
                'payload'  => $result,
            ];
        }
        else {
            $response = [
                'code' => $code,
                'payload'  => $result,
                'message' => $message,
            ];
        }
        return response()->json($response);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($code = '', $messages = [])
    {
    	$response = [
            'code' => $code,
            'message' => $messages,
        ];
        return response()->json($response);
    }
}