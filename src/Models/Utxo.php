<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class Utxo
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
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("scriptPubKey")
     */
    private $scriptPubKey;

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
     * @Serializer\SerializedName("height")
     */
    private $height = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("confirmations")
     */
    private $confirmations = 0;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("legacyAddress")
     */
    private $legacyAddress;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cashAddress")
     */
    private $cashAddress;

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
     * @return string
     */
    public function getScriptPubKey(): string
    {
        return $this->scriptPubKey;
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
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    /**
     * @return string
     */
    public function getLegacyAddress(): string
    {
        return $this->legacyAddress;
    }

    /**
     * @return string
     */
    public function getCashAddress(): string
    {
        return $this->cashAddress;
    }
}