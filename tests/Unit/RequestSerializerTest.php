<?php

namespace Tests\SymfonyPlayground;

use App\SymfonyPlayground\OBPRequestSerializer;
use App\SymfonyPlayground\RootClass;
use App\SymfonyPlayground\Serialization\BulkPaymentOBPRequest;
use App\SymfonyPlayground\Serialization\BulkPaymentOBPRequestPayload;
use App\SymfonyPlayground\Serialization\IMPSBulkPaymentCreditLineItem;
use App\SymfonyPlayground\Serialization\IMPSBulkPaymentDebitLineItem;
use App\SymfonyPlayground\Serialization\IMPSBulkPaymentLineItem;
use App\SymfonyPlayground\Serialization\IMPSBulkRequest;
use App\SymfonyPlayground\Serialization\OBPSessionContext;
use PHPUnit\Framework\TestCase;

class RequestSerializerTest extends TestCase
{

    public function testSerialize()
    {
        $requestSerializer = new OBPRequestSerializer();
        $obpRequest        = new BulkPaymentOBPRequest(new OBPSessionContext("89739832717"), null);
        $data              = $requestSerializer->serialize($obpRequest);
        print $data;
        $rootClass = $requestSerializer->getSerializer()->deserialize($data, BulkPaymentOBPRequest::class, 'xml');
        print $rootClass;
        self::assertTrue(true);
    }

    public function testIMPSRequestSerialization(): void
    {
        $debit        = new IMPSBulkPaymentDebitLineItem("1", "2", "3", "4", "5", "6", "7", "8");
        $credit       = new IMPSBulkPaymentCreditLineItem("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
        $impsLineItem = new IMPSBulkPaymentLineItem($debit, $credit);

        $header  = array("abc" => 1, "def" => 2);
        $summary = array("lakjsdlk" => 1, "asdjasd" => 2);

        $array = [];
        for ($i = 0; $i < 200; $i++) {
            $array[] = $impsLineItem;
        }


        $impsBulkPaymentRequest = new IMPSBulkRequest($header, $summary, $array);
        $obpRequestPayload      = new BulkPaymentOBPRequestPayload($impsBulkPaymentRequest);

        $request = new BulkPaymentOBPRequest(new OBPSessionContext("aksdhaksd"), $obpRequestPayload);


        $requestSerializer = new OBPRequestSerializer();
        $data              = $requestSerializer->serialize($request);
        print $data;
    }
}
