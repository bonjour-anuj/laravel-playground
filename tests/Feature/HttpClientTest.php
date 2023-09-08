<?php

namespace Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class HttpClientTest extends TestCase
{

    public function testGETRequest(): void
    {

        print Http::get("https://cat-fact.herokuapp.com/facts/");

    }

}
