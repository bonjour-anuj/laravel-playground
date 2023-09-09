<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;


class NEFTBulkPaymentLineItem
{
    #[SerializedName("stanext")]
    private string $stanext;

    #[SerializedName("paymentrefno")]
    private string $referenceNumber;

    #[SerializedName("CustId")]
    private string $customerID;

    #[SerializedName("Amount")]
    private float $amount;

    #[SerializedName("RemitterName")]
    private string $payerName;

    #[SerializedName("RemitterAccount")]
    private string $payerAccountNumber;

    #[SerializedName("RemitterAccountType")]
    private string $payerAccountType;

    #[SerializedName("Remitter_Address_1")]
    private string $payerAddress1;

    #[SerializedName("Remitter_Address_2")]
    private string $payerAddress2;

    #[SerializedName("Remitter_Address_3")]
    private string $payerAddress3;

    #[SerializedName("BeneName")]
    private string $beneficiaryName;

    #[SerializedName("BeneAccountNumber")]
    private string $beneficiaryAccountNumber;

    #[SerializedName("BeneAccountType")]
    private string $beneficiaryAccountType;

    #[SerializedName("BeneIFSCCODE")]
    private string $beneficiaryIFSCCode;

    #[SerializedName("BeneAddress_1")]
    private string $beneficiaryAddress1;

    #[SerializedName("BeneAddress_2")]
    private string $beneficiaryAddress2;

    #[SerializedName("BeneAddress_3")]
    private string $beneficiaryAddress3;

    #[SerializedName("BeneAddress_4")]
    private string $beneficiaryAddress4;

    #[SerializedName("RemitInformation_1")]
    private string $remitInformation1;

    #[SerializedName("RemitInformation_2")]
    private string $remitInformation2;

    #[SerializedName("RemitInformation_3")]
    private string $remitInformation3;

    #[SerializedName("RemitInformation_4")]
    private string $remitInformation4;

    #[SerializedName("RemitInformation_5")]
    private string $remitInformation5;

    #[SerializedName("RemitInformation_6")]
    private string $remitInformation6;

    #[SerializedName("ContactDetailsID")]
    private string $contactDetailsID;

    #[SerializedName("ContactDetailsDETAIL")]
    private string $contactDetails;

    #[SerializedName("codcurr")]
    private string $codcurr;

    #[SerializedName("refstan")]
    private string $refstan;

    #[SerializedName("forcedebit")]
    private string $forcedebit;
}
