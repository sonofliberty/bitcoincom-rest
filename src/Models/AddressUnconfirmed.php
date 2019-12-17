<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class AddressUnconfirmed
{
    /**
     * @var Unconfirmed[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\Unconfirmed>")
     * @Serializer\SerializedName("utxos")
     */
    private $utxos = [];

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
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("slpAddress")
     */
    private $slpAddress;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("scriptPubKey")
     */
    private $scriptPubKey;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("asm")
     */
    private $asm;

    /**
     * @return Unconfirmed[]
     */
    public function getUtxos(): array
    {
        return $this->utxos;
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

    /**
     * @return string
     */
    public function getSlpAddress(): string
    {
        return $this->slpAddress;
    }

    /**
     * @return string
     */
    public function getScriptPubKey(): string
    {
        return $this->scriptPubKey;
    }

    /**
     * @return string
     */
    public function getAsm(): string
    {
        return $this->asm;
    }
}