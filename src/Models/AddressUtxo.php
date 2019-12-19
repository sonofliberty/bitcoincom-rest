<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class AddressUtxo
{
    /**
     * @var Utxo[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\Utxo>")
     * @Serializer\SerializedName("utxos")
     */
    private $utxos = [];

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("legacyAddress")
     */
    private $legacyAddress;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cashAddress")
     */
    private $cashAddress;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("slpAddress")
     */
    private $slpAddress;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("scriptPubKey")
     */
    private $scriptPubKey;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("asm")
     */
    private $asm;

    /**
     * @return Utxo[]
     */
    public function getUtxos(): array
    {
        return $this->utxos;
    }

    /**
     * @return string|null
     */
    public function getLegacyAddress(): ?string
    {
        return $this->legacyAddress;
    }

    /**
     * @return string|null
     */
    public function getCashAddress(): ?string
    {
        return $this->cashAddress;
    }

    /**
     * @return string|null
     */
    public function getSlpAddress(): ?string
    {
        return $this->slpAddress;
    }

    /**
     * @return string|null
     */
    public function getScriptPubKey(): ?string
    {
        return $this->scriptPubKey;
    }

    /**
     * @return string|null
     */
    public function getAsm(): ?string
    {
        return $this->asm;
    }
}