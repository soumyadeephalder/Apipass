<?php

namespace Deepsoumya\Apipass;

use Deepsoumya\Apipass\Models\Token;
use Illuminate\Http\Request;

class Helpers
{
    public static function loginToken(Request $request, $guard)
    {
        $data = [];
        $token = $request->header('Authorization');
        $token = str_replace("Bearer ", "", $token);
        // $user = User::where('token', $token)->count();
        $tokenData = Token::where('apipass_access_tokens.token', $token)
        ->join($guard, 'apipass_access_tokens.client_id', '=', $guard.'.id')
        ->first();
        // return $tokenData;
        if ($tokenData) {
            $data['status'] = true;
            $data['user'] = $tokenData;
            $data['error'] = [];
        } else {
            $data['status'] = false;
            $data['user'] = null;
            $data['error'] = ['please login again'];
        }
        return $data;
    }
}
