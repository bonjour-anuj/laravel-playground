<?php

namespace App\SymfonyPlayground\Serialization;

use App\SymfonyPlayground\Serialization\AbstractBulkPaymentRequest;
use Symfony\Component\Serializer\Annotation\SerializedName;

class IMPSBulkRequest extends AbstractBulkPaymentRequest
{

    #[SerializedName("header")]
    private array $header;
    #[SerializedName("summary")]
    private array $summary;
    #[SerializedName("txnlist")]
    private array $impsTransactionLineItems;

    /**
     * @param  array  $header
     * @param  array  $summary
     * @param  array  $impsTransactionLineItems
     */
    public function __construct(array $header, array $summary, array $impsTransactionLineItems)
    {
        $this->header                   = $header;
        $this->summary                  = $summary;
        $this->impsTransactionLineItems = $impsTransactionLineItems;
    }

    public function getHeader(): array
    {
        return $this->header;
    }

    public function getSummary(): array
    {
        return $this->summary;
    }

    public function getImpsTransactionLineItems(): array
    {
        return $this->impsTransactionLineItems;
    }




}
