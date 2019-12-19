<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpTokenBalance
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("tokenBalance")
     */
    private $tokenBalance = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tokenBalanceString")
     */
    private $tokenBalanceString;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("slpAddress")
     */
    private $slpAddress;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tokenId")
     */
    private $tokenId;

    /**
     * @return int
     */
    public function getTokenBalance(): int
    {
        return $this->tokenBalance;
    }

    /**
     * @return string|null
     */
    public function getTokenBalanceString(): ?string
    {
        return $this->tokenBalanceString;
    }

    /**
     * @return string|null
     */
    public function getSlpAddress(): ?string
    {
        return $this->slpAddress;
    }

    /**
     * @return string|null
     */
    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }
}