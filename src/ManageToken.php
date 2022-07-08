<?php

namespace Deepsoumya\Apipass;

use Deepsoumya\Apipass\Models\Token;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class ManageToken
{
    public static function Create(String $scopesTable, int $client_id, Date $expDate = null)
    {   
        $token = Str::random(128);
        $dataSet = new Token();
        $dataSet->client_id = $client_id;
        $dataSet->scopes = $scopesTable;
        $dataSet->token = $token;
        $dataSet->expDate = $expDate;
        $dataSet->save();
        return $dataSet;
    }
}