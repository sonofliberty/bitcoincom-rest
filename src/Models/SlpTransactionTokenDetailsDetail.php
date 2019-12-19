<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpTransactionTokenDetailsDetail
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("decimals")
     */
    private $decimals = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tokenIdHex")
     */
    private $tokenIdHex;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transactionType")
     */
    private $transactionType;

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
     * @Serializer\SerializedName("documentSha256Hex")
     */
    private $documentSha256Hex;

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
     * @var int|null
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("txnBatonVout")
     */
    private $txnBatonVout;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("txnContainsBaton")
     */
    private $txnContainsBaton = false;

    /**
     * @var SlpTransactionTokenDetailsDetailOutput[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\SlpTransactionTokenDetailsDetailOutput>")
     * @Serializer\SerializedName("outputs")
     */
    private $outputs = [];

    /**
     * @return int
     */
    public function getDecimals(): int
    {
        return $this->decimals;
    }

    /**
     * @return string|null
     */
    public function getTokenIdHex(): ?string
    {
        return $this->tokenIdHex;
    }

    /**
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
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
    public function getDocumentSha256Hex(): ?string
    {
        return $this->documentSha256Hex;
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
     * @return int|null
     */
    public function getTxnBatonVout(): ?int
    {
        return $this->txnBatonVout;
    }

    /**
     * @return bool
     */
    public function isTxnContainsBaton(): bool
    {
        return $this->txnContainsBaton;
    }

    /**
     * @return SlpTransactionTokenDetailsDetailOutput[]
     */
    public function getOutputs(): array
    {
        return $this->outputs;
    }
}