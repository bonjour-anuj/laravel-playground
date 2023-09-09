<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class BulkPaymentOBPRequest extends OBPRequest
{

    #[SerializedName("sessionContext")]
    private OBPSessionContext $sessionContext;

    #[SerializedName("GenericSyncSTPRequestDTO")]
    private BulkPaymentOBPRequestPayload $obpRequestPayload;

    /**
     * @param  OBPSessionContext  $sessionContext
     * @param  BulkPaymentOBPRequestPayload  $obpRequestPayload
     */
    public function __construct(OBPSessionContext $sessionContext, BulkPaymentOBPRequestPayload $obpRequestPayload)
    {
        $this->sessionContext    = $sessionContext;
        $this->obpRequestPayload = $obpRequestPayload;
    }

    public function getSessionContext(): OBPSessionContext
    {
        return $this->sessionContext;
    }

    public function getObpRequestPayload(): BulkPaymentOBPRequestPayload
    {
        return $this->obpRequestPayload;
    }


}
