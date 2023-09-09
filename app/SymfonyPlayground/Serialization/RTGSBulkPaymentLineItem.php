<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class RTGSBulkPaymentLineItem
{
    /**
     * <stanext>1</stanext>
     * <refstan>1</refstan>
     * <paymentrefno>0013E61787778456</paymentrefno>
     * <accounttype>CU</accounttype>
     * <accountno>50100114008950</accountno>
     * <ifsccode>IDIB000B027</ifsccode>
     * <txndate>{{Today}}</txndate>
     * <amount>5000</amount>
     * <custdet>ECMSCOMP1</custdet>
     * <benefaccountno>30044068023</benefaccountno>
     * <benefcustdet>EXCELINDUSTRIES</benefcustdet>
     * <clientrefno>1603393272</clientrefno>
     * <paydetail>SBIN0006506</paydetail>
     * <custdetadd1>No2Address</custdetadd1>
     * <custdetadd2>No2Address</custdetadd2>
     * <RemitInformation_1/>
     * <RemitInformation_2/>
     * <RemitInformation_3/>
     * <custuniqno>00030110001635</custuniqno>
     */

    #[SerializedName("stanext")]
    private string $staNext;
    #[SerializedName("refstan")]
    private string $refstan;
    #[SerializedName("paymentrefno")]
    private string $paymentrefno;
    #[SerializedName("accountno")]
    private string $payerAccountNumber;
    #[SerializedName("accounttype")]
    private string $payerAccountType;
    #[SerializedName("txndate")]
    private string $transactionDate;
    #[SerializedName("amount")]
    private float $amount;

    #[SerializedName("custdet")]
    private string $customerDetail;

    #[SerializedName("benefaccountno")]
    private string $beneficiaryAccountNumber;

    #[SerializedName("benefcustdet")]
    private string $benefcustdet;

    #[SerializedName("clientrefno")]
    private string $clientrefno;


    #[SerializedName("paydetail")]
    private string $paydetail;

    #[SerializedName("custdetadd1")]
    private string $customerAddress1;

    #[SerializedName("custdetadd2")]
    private string $customerAddress2;

    #[SerializedName("custuniqno")]
    private string $customerUniqueNumber;

    #[SerializedName("RemitInformation_1")]
    private string $remitInformation1;

    #[SerializedName("RemitInformation_2")]
    private string $remitInformation2;

    #[SerializedName("RemitInformation_3")]
    private string $remitInformation3;


}
