<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class CashAccountReverseLookupResult
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountEmoji")
     */
    private $accountEmoji;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("nameText")
     */
    private $nameText;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("accountNumber")
     */
    private $accountNumber = 0.0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountHash")
     */
    private $accountHash;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("accountCollisionLength")
     */
    private $accountCollisionLength = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("payloadType")
     */
    private $payloadType = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("payloadAddress")
     */
    private $payloadAddress;

    /**
     * @return string|null
     */
    public function getAccountEmoji(): ?string
    {
        return $this->accountEmoji;
    }

    /**
     * @return string|null
     */
    public function getNameText(): ?string
    {
        return $this->nameText;
    }

    /**
     * @return float
     */
    public function getAccountNumber(): float
    {
        return $this->accountNumber;
    }

    /**
     * @return string|null
     */
    public function getAccountHash(): ?string
    {
        return $this->accountHash;
    }

    /**
     * @return int
     */
    public function getAccountCollisionLength(): int
    {
        return $this->accountCollisionLength;
    }

    /**
     * @return int
     */
    public function getPayloadType(): int
    {
        return $this->payloadType;
    }

    /**
     * @return string|null
     */
    public function getPayloadAddress(): ?string
    {
        return $this->payloadAddress;
    }
}