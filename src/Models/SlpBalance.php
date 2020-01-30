<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpBalance
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tokenId")
     */
    private $tokenId;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("balance")
     */
    private $balance = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("balanceString")
     */
    private $balanceString;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("slpAddress")
     */
    private $slpAddress;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("decimalCount")
     */
    private $decimalCount = 0;

    /**
     * @return string|null
     */
    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return string|null
     */
    public function getBalanceString(): ?string
    {
        return $this->balanceString;
    }

    /**
     * @return string|null
     */
    public function getSlpAddress(): ?string
    {
        return $this->slpAddress;
    }

    /**
     * @return int
     */
    public function getDecimalCount(): int
    {
        return $this->decimalCount;
    }
}