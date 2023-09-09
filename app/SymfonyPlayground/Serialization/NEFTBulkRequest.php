<?php

namespace App\SymfonyPlayground\Serialization;

class NEFTBulkRequest extends AbstractBulkPaymentRequest
{


    public function __construct(string $partnerID, string $idTXN)
    {
        parent::__construct($partnerID, $idTXN);
    }

}
