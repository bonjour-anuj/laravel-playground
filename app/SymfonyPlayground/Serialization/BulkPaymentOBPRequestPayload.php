<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class BulkPaymentOBPRequestPayload
{

    #[SerializedName("requestString")]
    private array $request;

    #[SerializedName("stpControlHeader")]
    protected array $stpControlHeader;


    public function __construct(AbstractBulkPaymentRequest $bulkPaymentRequest)
    {
        $this->request          = array("faxml" => $bulkPaymentRequest);
        $this->stpControlHeader = array("partnerid" => "1212", "idtxn" => "1212");
    }

    public function getRequest(): array
    {
        return $this->request;
    }

    public function getStpControlHeader(): array
    {
        return $this->stpControlHeader;
    }


}
