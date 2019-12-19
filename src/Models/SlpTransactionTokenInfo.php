<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpTransactionTokenInfo
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("versionType")
     */
    private $versionType = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transactionType")
     */
    private $transactionType;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tokenIdHex")
     */
    private $tokenIdHex;

    /**
     * @var int[]
     *
     * @Serializer\Type("array<integer>")
     * @Serializer\SerializedName("sendOutputs")
     */
    private $sendOutputs = [];
}