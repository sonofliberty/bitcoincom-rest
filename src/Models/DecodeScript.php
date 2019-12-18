<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class DecodeScript
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("asm")
     */
    private $asm;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    private $type;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("p2sh")
     */
    private $p2sh;

    /**
     * @return string|null
     */
    public function getAsm(): ?string
    {
        return $this->asm;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getP2sh(): ?string
    {
        return $this->p2sh;
    }
}