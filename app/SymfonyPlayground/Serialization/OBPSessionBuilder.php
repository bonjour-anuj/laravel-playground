<?php

namespace App\SymfonyPlayground\Serialization;

class OBPSessionBuilder
{


    private OBPSessionContext $sessionContext;

    private string $sessionXMLTagName;

    private BulkPaymentOBPRequestPayload $payload;

    private string $payloadXMLTagName;

    public function __construct()
    {
    }

    public function sessionContext(
        OBPSessionContext $context,
        string $sessionXMLTagName = "sessionContext"
    ): OBPSessionBuilder {
        $this->sessionContext    = $context;
        $this->sessionXMLTagName = $sessionXMLTagName;

        return $this;
    }

    public function requestPayload(BulkPaymentOBPRequestPayload $payload, string $payloadXMLTagName): OBPSessionBuilder
    {
        $this->$payload           = $payload;
        $this->$payloadXMLTagName = $payloadXMLTagName;

        return $this;
    }

    public function build(): BulkPaymentOBPRequest
    {
        return new BulkPaymentOBPRequest($this->sessionContext, $this->payload);
    }


}
