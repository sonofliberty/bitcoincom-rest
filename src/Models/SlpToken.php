<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpToken
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("decimals")
     */
    private $decimals = 0;

    /**
     * @var \DateTime|null
     *
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("timestamp")
     */
    private $timestamp;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("versionType")
     */
    private $versionType = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("documentUri")
     */
    private $documentUri;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("symbol")
     */
    private $symbol;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("containsBaton")
     */
    private $containsBaton = false;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("documentHash")
     */
    private $documentHash;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("initialTokenQty")
     */
    private $initialTokenQty = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blockCreated")
     */
    private $blockCreated = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blockLastActiveSend")
     */
    private $blockLastActiveSend = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blockLastActiveMint")
     */
    private $blockLastActiveMint = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("txnsSinceGenesis")
     */
    private $txnsSinceGenesis = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("validAddresses")
     */
    private $validAddresses = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("totalMinted")
     */
    private $totalMinted = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("totalBurned")
     */
    private $totalBurned = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("circulatingSupply")
     */
    private $circulatingSupply = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("mintingBatonStatus")
     */
    private $mintingBatonStatus;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("timestampUnix")
     */
    private $timestampUnix = 0;

    /**
     * @return int
     */
    public function getDecimals(): int
    {
        return $this->decimals;
    }

    /**
     * @return \DateTime|null
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getVersionType(): int
    {
        return $this->versionType;
    }

    /**
     * @return string|null
     */
    public function getDocumentUri(): ?string
    {
        return $this->documentUri;
    }

    /**
     * @return string|null
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isContainsBaton(): bool
    {
        return $this->containsBaton;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getDocumentHash(): ?string
    {
        return $this->documentHash;
    }

    /**
     * @return int
     */
    public function getInitialTokenQty(): int
    {
        return $this->initialTokenQty;
    }

    /**
     * @return int
     */
    public function getBlockCreated(): int
    {
        return $this->blockCreated;
    }

    /**
     * @return int
     */
    public function getBlockLastActiveSend(): int
    {
        return $this->blockLastActiveSend;
    }

    /**
     * @return int
     */
    public function getBlockLastActiveMint(): int
    {
        return $this->blockLastActiveMint;
    }

    /**
     * @return int
     */
    public function getTxnsSinceGenesis(): int
    {
        return $this->txnsSinceGenesis;
    }

    /**
     * @return int
     */
    public function getValidAddresses(): int
    {
        return $this->validAddresses;
    }

    /**
     * @return int
     */
    public function getTotalMinted(): int
    {
        return $this->totalMinted;
    }

    /**
     * @return int
     */
    public function getTotalBurned(): int
    {
        return $this->totalBurned;
    }

    /**
     * @return int
     */
    public function getCirculatingSupply(): int
    {
        return $this->circulatingSupply;
    }

    /**
     * @return string|null
     */
    public function getMintingBatonStatus(): ?string
    {
        return $this->mintingBatonStatus;
    }

    /**
     * @return int
     */
    public function getTimestampUnix(): int
    {
        return $this->timestampUnix;
    }
}