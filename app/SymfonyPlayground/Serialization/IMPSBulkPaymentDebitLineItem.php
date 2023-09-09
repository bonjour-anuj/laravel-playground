<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class IMPSBulkPaymentDebitLineItem
{

    /*
     * <stanext>1</stanext>
     * <accountno>50100001195082</accountno>
     * <amount>5</amount>
     * <txndesc>DOMIMPS01 - UTIB0001213 SBI-MAGNUM INSTACASH</txndesc>
     * <rrnrefno>311233366511</rrnrefno>
     * <sendername>STAR HEALTH AND ALLIED INSURANCE CO</sendername>
     * <sendermobile>0000000000</sendermobile>
     * <remitteractype>11</remitteractype>
     */

    #[SerializedName("stanext")]
    private string $stanext;
    #[SerializedName("accountno")]
    private string $payerAccountNumber;
    #[SerializedName("remitteractype")]
    private string $payerAccountType;
    #[SerializedName("sendername")]
    private string $senderName;
    #[SerializedName("sendermobile")]
    private string $senderMobile;
    #[SerializedName("rrnrefno")]
    private string $rrnrefno;
    #[SerializedName("amount")]
    private float $amount;
    #[SerializedName("txndesc")]
    private string $transactionDescription;

    /**
     * @param  string  $stanext
     * @param  string  $payerAccountNumber
     * @param  string  $payerAccountType
     * @param  string  $senderName
     * @param  string  $senderMobile
     * @param  string  $rrnrefno
     * @param  float  $amount
     * @param  string  $transactionDescription
     */
    public function __construct(
        string $stanext,
        string $payerAccountNumber,
        string $payerAccountType,
        string $senderName,
        string $senderMobile,
        string $rrnrefno,
        float $amount,
        string $transactionDescription
    ) {
        $this->stanext                = $stanext;
        $this->payerAccountNumber     = $payerAccountNumber;
        $this->payerAccountType       = $payerAccountType;
        $this->senderName             = $senderName;
        $this->senderMobile           = $senderMobile;
        $this->rrnrefno               = $rrnrefno;
        $this->amount                 = $amount;
        $this->transactionDescription = $transactionDescription;
    }


    public function getStanext(): string
    {
        return $this->stanext;
    }

    public function getPayerAccountNumber(): string
    {
        return $this->payerAccountNumber;
    }

    public function getPayerAccountType(): string
    {
        return $this->payerAccountType;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function getSenderMobile(): string
    {
        return $this->senderMobile;
    }

    public function getRrnrefno(): string
    {
        return $this->rrnrefno;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getTransactionDescription(): string
    {
        return $this->transactionDescription;
    }



}
