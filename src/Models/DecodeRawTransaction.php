<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class DecodeRawTransaction
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("txid")
     */
    private $txid;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hash")
     */
    private $hash;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size")
     */
    private $size = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("version")
     */
    private $version = 0;

    /**
     * @var DecodeRawTransactionInput[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\DecodeRawTransactionInput>")
     * @Serializer\SerializedName("vin")
     */
    private $vin = [];

    /**
     * @var DecodeRawTransactionOutput[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\DecodeRawTransactionOutput>")
     * @Serializer\SerializedName("vout")
     */
    private $vout = [];

    /**
     * @return string|null
     */
    public function getTxid(): ?string
    {
        return $this->txid;
    }

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return DecodeRawTransactionInput[]
     */
    public function getVin(): array
    {
        return $this->vin;
    }

    /**
     * @return DecodeRawTransactionOutput[]
     */
    public function getVout(): array
    {
        return $this->vout;
    }
}