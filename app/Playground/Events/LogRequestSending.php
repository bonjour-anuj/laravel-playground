<?php

namespace App\Playground\Events;

use Illuminate\Http\Client\Events\RequestSending;

class LogRequestSending
{

    public function handle(RequestSending $requestSending)
    {
        $request = $requestSending->request;
        $url =  $request->url();
        $method = $request->method();
        $headers = $request->headers();
        $body = $request->body();

    }
}
