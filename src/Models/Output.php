<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class Output
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("value")
     */
    private $value = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("n")
     */
    private $n = 0;

    /**
     * @var ScriptPubKey
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\ScriptPubKey")
     * @Serializer\SerializedName("scriptPubKey")
     */
    private $scriptPubKey;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("spentTxId")
     */
    private $spentTxid;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("spentHeight")
     */
    private $spentHeight = 0;

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getN(): int
    {
        return $this->n;
    }

    /**
     * @return ScriptPubKey
     */
    public function getScriptPubKey(): ScriptPubKey
    {
        return $this->scriptPubKey;
    }

    /**
     * @return string
     */
    public function getSpentTxid(): string
    {
        return $this->spentTxid;
    }

    /**
     * @return int
     */
    public function getSpentHeight(): int
    {
        return $this->spentHeight;
    }
}