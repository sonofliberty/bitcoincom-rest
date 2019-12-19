<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class DecodeRawTransactionInput
{
    /**
     * @var string|null
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
     * @var ScriptSig
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\ScriptSig")
     * @Serializer\SerializedName("scriptSig")
     */
    private $scriptSig;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("sequence")
     */
    private $sequence = 0;
}