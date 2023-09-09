<?php

namespace App\Models;

use http\Url;

class OutboundAPIRequest
{

    private string $url;
    private array $headers;

    private string $method;
    private string $requestBody;

    private string $responseBody;

    /**
     * @param  string  $url
     * @param  string  $method
     * @param  array  $headers
     * @param  string  $requestBody
     */
    public function __construct(string $url, string $method, array $headers, string $requestBody)
    {
        $this->url         = $url;
        $this->method      = $method;
        $this->headers     = $headers;
        $this->requestBody = $requestBody;
    }

    /**
     * @param  string  $responseBody
     */
    public function setResponseBody(string $responseBody): void
    {
        $this->responseBody = $responseBody;
    }

}
