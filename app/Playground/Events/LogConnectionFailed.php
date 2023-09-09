<?php

namespace App\Playground\Events;

use Illuminate\Http\Client\Events\ConnectionFailed;
use Illuminate\Http\Client\Events\RequestSending;

class LogConnectionFailed
{

    public function handle(ConnectionFailed $connectionFailed)
    {
        $request = $connectionFailed->request;

        $url =  $request->url();
        $method = $request->method();
        $requestHeaders = $request->headers();
        $requestBody = $request->body();
    }

}
