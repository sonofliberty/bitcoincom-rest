<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpAddressBalance
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cashAddress")
     */
    private $cashAddress;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("legacyAddress")
     */
    private $legacyAddress;

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
     * @var int
     *
     * @Serializer\Type("integer")
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
     * @return string|null
     */
    public function getCashAddress(): ?string
    {
        return $this->cashAddress;
    }

    /**
     * @return string|null
     */
    public function getLegacyAddress(): ?string
    {
        return $this->legacyAddress;
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

    /**
     * @return int
     */
    public function getBalance(): int
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
}