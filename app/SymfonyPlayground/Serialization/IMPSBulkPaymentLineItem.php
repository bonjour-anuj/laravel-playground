<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class IMPSBulkPaymentLineItem
{


    /*
     * Structure of line items
     * <debit>...</debit>
     * <credit>...</credit>
     */

    #[SerializedName("debit")]
    private IMPSBulkPaymentDebitLineItem $debitLineItem;

    #[SerializedName("credit")]
    private IMPSBulkPaymentCreditLineItem $creditLineItem;

    /**
     * @param  IMPSBulkPaymentDebitLineItem  $debitLineItem
     * @param  IMPSBulkPaymentCreditLineItem  $creditLineItem
     */
    public function __construct(
        IMPSBulkPaymentDebitLineItem $debitLineItem,
        IMPSBulkPaymentCreditLineItem $creditLineItem
    ) {
        $this->debitLineItem = $debitLineItem;
        $this->creditLineItem = $creditLineItem;
    }

    public function getDebitLineItem(): IMPSBulkPaymentDebitLineItem
    {
        return $this->debitLineItem;
    }

    public function getCreditLineItem(): IMPSBulkPaymentCreditLineItem
    {
        return $this->creditLineItem;
    }




}
