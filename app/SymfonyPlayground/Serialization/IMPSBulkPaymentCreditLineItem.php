<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class IMPSBulkPaymentCreditLineItem
{

    /*
     * Structure of Line Item
     *
     * <stanext>2</stanext>
     * <accountno>123456041</accountno>
     * <amount>5</amount>
     * <txndesc>DOMIMPS01 - C78514121222131255 -STAR HEALTH AND ALLIED INSURANCE COMPANY</txndesc>
     * <rrnrefno>311233366511</rrnrefno>
     * <paymttype>P2A</paymttype>
     * <ifsc>MUBL0000005</ifsc>
     * <beneacc>123456041</beneacc>
     * <benename>SBI-MAGNUM INSTACASH</benename>
     * <beneacctype>11</beneacctype>
     */

    #[SerializedName("stanext")]
    private string $stanext;
    #[SerializedName("accountno")]
    private string $accountno;
    #[SerializedName("amount")]
    private string $amount;
    #[SerializedName("txndesc")]
    private string $txndesc;
    #[SerializedName("rrnrefno")]
    private string $rrnrefno;
    #[SerializedName("paymttype")]
    private string $paymttype;
    #[SerializedName("ifsc")]
    private string $ifsc;
    #[SerializedName("beneacc")]
    private string $beneacc;
    #[SerializedName("benename")]
    private string $benename;
    #[SerializedName("beneacctype")]
    private string $beneacctype;

    /**
     * @param  string  $stanext
     * @param  string  $accountno
     * @param  string  $amount
     * @param  string  $txndesc
     * @param  string  $rrnrefno
     * @param  string  $paymttype
     * @param  string  $ifsc
     * @param  string  $beneacc
     * @param  string  $benename
     * @param  string  $beneacctype
     */
    public function __construct(
        string $stanext,
        string $accountno,
        string $amount,
        string $txndesc,
        string $rrnrefno,
        string $paymttype,
        string $ifsc,
        string $beneacc,
        string $benename,
        string $beneacctype
    ) {
        $this->stanext     = $stanext;
        $this->accountno   = $accountno;
        $this->amount      = $amount;
        $this->txndesc     = $txndesc;
        $this->rrnrefno    = $rrnrefno;
        $this->paymttype   = $paymttype;
        $this->ifsc        = $ifsc;
        $this->beneacc     = $beneacc;
        $this->benename    = $benename;
        $this->beneacctype = $beneacctype;
    }


    public function getStanext(): string
    {
        return $this->stanext;
    }

    public function getAccountno(): string
    {
        return $this->accountno;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getTxndesc(): string
    {
        return $this->txndesc;
    }

    public function getRrnrefno(): string
    {
        return $this->rrnrefno;
    }

    public function getPaymttype(): string
    {
        return $this->paymttype;
    }

    public function getIFSC(): string
    {
        return $this->ifsc;
    }

    public function getBeneacc(): string
    {
        return $this->beneacc;
    }

    public function getBenename(): string
    {
        return $this->benename;
    }

    public function getBeneacctype(): string
    {
        return $this->beneacctype;
    }
}
