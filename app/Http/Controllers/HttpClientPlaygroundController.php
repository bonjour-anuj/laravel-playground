<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Playground\HttpClient\HttpClientPlayground;

class HttpClientPlaygroundController extends Controller
{

    public function getResponse()
    {
        $playground = new HttpClientPlayground();

        return $playground->doGET();
    }

}
