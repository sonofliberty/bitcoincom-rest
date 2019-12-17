<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class ScriptSig
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
}