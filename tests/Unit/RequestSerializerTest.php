<?php

namespace Tests\SymfonyPlayground;

use App\SymfonyPlayground\RequestSerializer;
use App\SymfonyPlayground\RootClass;
use PHPUnit\Framework\TestCase;

class RequestSerializerTest extends TestCase
{

    public function testSerialize()
    {
        $requestSerializer = new RequestSerializer();
        $data =  $requestSerializer->serialize(new RootClass());
        $rootClass = $requestSerializer->getSerializer()->deserialize($data, RootClass::class,'xml');
        print $rootClass;
        self::assertTrue(true);

    }
}
