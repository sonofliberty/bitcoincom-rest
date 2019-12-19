<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpTransactionDetails
{
    /**
     * @var TransactionDetails
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\TransactionDetails")
     * @Serializer\SerializedName("retData")
     */
    private $retData;

    /**
     * @var SlpTransactionTokenInfo
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\SlpTransactionTokenInfo")
     * @Serializer\SerializedName("tokenInfo")
     */
    private $tokenInfo;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("tokenIsValid")
     */
    private $tokenIsValid = false;

    /**
     * @return TransactionDetails
     */
    public function getRetData(): TransactionDetails
    {
        return $this->retData;
    }

    /**
     * @return SlpTransactionTokenInfo
     */
    public function getTokenInfo(): SlpTransactionTokenInfo
    {
        return $this->tokenInfo;
    }

    /**
     * @return bool
     */
    public function isTokenIsValid(): bool
    {
        return $this->tokenIsValid;
    }
}