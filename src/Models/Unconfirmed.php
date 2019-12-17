<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class Unconfirmed
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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("vout")
     */
    private $vout = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("amount")
     */
    private $amount = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("satoshis")
     */
    private $satoshis = 0;

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
     * @Serializer\SerializedName("ts")
     */
    private $timestamp = 0;

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
    public function getVout(): int
    {
        return $this->vout;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getSatoshis(): int
    {
        return $this->satoshis;
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
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
}