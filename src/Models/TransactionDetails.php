<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class TransactionDetails
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("txid")
     */
    private $txid;

    /**
     * @var int
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("version")
     */
    private $version = 0;

    /**
     * @var int
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("locktime")
     */
    private $locktime = 0;

    /**
     * @var Input[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\Input>")
     * @Serializer\SerializedName("vin")
     */
    private $vin = [];

    /**
     * @var Output[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\Output>")
     * @Serializer\SerializedName("vout")
     */
    private $vout = [];

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("blockhash")
     */
    private $blockhash;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blockheight")
     */
    private $blockheight = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("confirmations")
     */
    private $confirmations = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("time")
     */
    private $time = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blocktime")
     */
    private $blocktime = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("valueOut")
     */
    private $valueOut = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size")
     */
    private $size = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("valueIn")
     */
    private $valueIn = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fees")
     */
    private $fees = 0.0;

    /**
     * @return string
     */
    public function getTxid(): string
    {
        return $this->txid;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return int
     */
    public function getLocktime(): int
    {
        return $this->locktime;
    }

    /**
     * @return Input[]
     */
    public function getVin(): array
    {
        return $this->vin;
    }

    /**
     * @return Output[]
     */
    public function getVout(): array
    {
        return $this->vout;
    }

    /**
     * @return string
     */
    public function getBlockhash(): string
    {
        return $this->blockhash;
    }

    /**
     * @return int
     */
    public function getBlockheight(): int
    {
        return $this->blockheight;
    }

    /**
     * @return int
     */
    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getBlocktime(): int
    {
        return $this->blocktime;
    }

    /**
     * @return float
     */
    public function getValueOut(): float
    {
        return $this->valueOut;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return float
     */
    public function getValueIn(): float
    {
        return $this->valueIn;
    }

    /**
     * @return float
     */
    public function getFees(): float
    {
        return $this->fees;
    }
}