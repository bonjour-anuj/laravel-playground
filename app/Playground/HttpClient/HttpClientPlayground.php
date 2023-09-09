<?php

namespace App\Playground\HttpClient;

use Illuminate\Support\Facades\Http;

class HttpClientPlayground
{

    public function doGET(): void
    {
        Http::connectTimeout(0);
        $response = Http::get("https://api.publicapis.org/entries");
        print $response->status();

    }

}
