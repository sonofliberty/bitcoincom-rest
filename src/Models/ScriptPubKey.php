<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class ScriptPubKey
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hex")
     */
    private $hex;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("asm")
     */
    private $asm;

    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("addresses")
     */
    private $addresses = [];

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    private $type;

    /**
     * @var int|null
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("reqSigs")
     */
    private $reqSigs;

    /**
     * @return string
     */
    public function getHex(): string
    {
        return $this->hex;
    }

    /**
     * @return string
     */
    public function getAsm(): string
    {
        return $this->asm;
    }

    /**
     * @return string[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getReqSigs(): ?int
    {
        return $this->reqSigs;
    }
}