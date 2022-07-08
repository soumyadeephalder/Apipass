<?php

namespace App\Helpers;

use Deepsoumya\ApiPass\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;

class ApiAuth
{
    public static function loginToken(Request $request)
    {
        $data = [];
        $token = $request->header('Authorization');
        $token = str_replace("Bearer ", "", $token);
        // $user = User::where('token', $token)->count();
        $tokenData = Token::where('token', $token)->first();
        // return $tokenData;
        if ($tokenData) {
            // $user = User::where('id', $tokenData->tokenable_id)
            //     // ->select('email', 'id', 'first_name', 'last_name', 'mobile', 'company_name', 'address', 'city', 'state', 'zip_code', 'country')
            //     ->first();
            $data['status'] = true;
            $data['user'] = null;
            $data['error'] = [];
        } else {
            $data['status'] = false;
            $data['user'] = null;
            $data['error'] = ['please login again'];
        }
        return $data;
    }
}
