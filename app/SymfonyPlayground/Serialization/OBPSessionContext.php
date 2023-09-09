<?php

namespace App\SymfonyPlayground\Serialization;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OBPSessionContext
{

    #[SerializedName("bankCode")]
    private string $bankCode;
    #[SerializedName("transactionBranch")]
    private string $transactionBranch;

    #[SerializedName("transactingPartyCode")]
    private string $transactingPartyCode;

    #[SerializedName("channel")]
    private string $channel;

    #[SerializedName("externalReferenceNo")]
    private string $externalReferenceNo;

    #[SerializedName("userId")]
    private string $userId;

    #[SerializedName("userReferenceNumber")]
    private string $userReferenceNumber;

    /**
     * @param  string  $externalReferenceNo
     */
    public function __construct(string $externalReferenceNo)
    {
        $this->bankCode             = "08";
        $this->transactionBranch    = "089999";
        $this->transactingPartyCode = "50000012";
        $this->channel              = "NAVI";
        $this->externalReferenceNo  = $externalReferenceNo;
        $this->userId               = "ASYNCUSER";
        $this->userReferenceNumber  = "742";
    }

    public function getBankCode(): string
    {
        return $this->bankCode;
    }

    public function getTransactionBranch(): string
    {
        return $this->transactionBranch;
    }

    public function getTransactingPartyCode(): string
    {
        return $this->transactingPartyCode;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function getExternalReferenceNo(): string
    {
        return $this->externalReferenceNo;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getUserReferenceNumber(): string
    {
        return $this->userReferenceNumber;
    }



}
