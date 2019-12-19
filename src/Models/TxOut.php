<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class TxOut
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bestblock")
     */
    private $bestblock;

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
     * @Serializer\SerializedName("value")
     */
    private $value = 0;

    /**
     * @var ScriptPubKey
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\ScriptPubKey")
     * @Serializer\SerializedName("scriptPubKey")
     */
    private $scriptPubKey;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("coinbase")
     */
    private $coinbase = false;

    /**
     * @return string|null
     */
    public function getBestblock(): ?string
    {
        return $this->bestblock;
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
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return ScriptPubKey
     */
    public function getScriptPubKey(): ScriptPubKey
    {
        return $this->scriptPubKey;
    }

    /**
     * @return bool
     */
    public function isCoinbase(): bool
    {
        return $this->coinbase;
    }
}