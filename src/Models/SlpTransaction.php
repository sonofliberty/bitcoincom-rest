<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpTransaction
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("txid")
     */
    private $txid;

    /**
     * @var SlpTransactionTokenDetails
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\SlpTransactionTokenDetails")
     * @Serializer\SerializedName("tokenDetails")
     */
    private $tokenDetails;

    /**
     * @return string|null
     */
    public function getTxid(): ?string
    {
        return $this->txid;
    }

    /**
     * @return SlpTransactionTokenDetails
     */
    public function getTokenDetails(): SlpTransactionTokenDetails
    {
        return $this->tokenDetails;
    }
}