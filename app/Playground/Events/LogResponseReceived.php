<?php

namespace App\Playground\Events;

use Illuminate\Http\Client\Events\ResponseReceived;

class LogResponseReceived
{

    public function handle(ResponseReceived $responseReceived)
    {
        $request = $responseReceived->request;
        $response = $responseReceived->response;

        $url =  $request->url();
        $method = $request->method();
        $requestHeaders = $request->headers();
        $requestBody = $request->body();

        $responseBody = $response->body();
        $responseStatus = $response->status();
        $responseHeaders = $response->headers();


    }

}
