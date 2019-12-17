<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class Input
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
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("sequence")
     */
    private $sequence = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("n")
     */
    private $n = 0;

    /**
     * @var ScriptSig
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\ScriptSig")
     * @Serializer\SerializedName("scriptSig")
     */
    private $scriptSig;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("addr")
     */
    private $addr;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("valueSat")
     */
    private $valueSat = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("value")
     */
    private $value = 0.0;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("doubleSpentTxID")
     */
    private $doubleSpentTxid;

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
     * @return int
     */
    public function getSequence(): int
    {
        return $this->sequence;
    }

    /**
     * @return int
     */
    public function getN(): int
    {
        return $this->n;
    }

    /**
     * @return ScriptSig
     */
    public function getScriptSig(): ScriptSig
    {
        return $this->scriptSig;
    }

    /**
     * @return string
     */
    public function getAddr(): string
    {
        return $this->addr;
    }

    /**
     * @return int
     */
    public function getValueSat(): int
    {
        return $this->valueSat;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDoubleSpentTxid(): string
    {
        return $this->doubleSpentTxid;
    }
}