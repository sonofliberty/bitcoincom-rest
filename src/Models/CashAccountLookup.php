<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class CashAccountLookup
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("identifier")
     */
    private $identifier;

    /**
     * @var CashAccountLookupInformation
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\CashAccountLookupInformation")
     * @Serializer\SerializedName("information")
     */
    private $information;

    /**
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @return CashAccountLookupInformation
     */
    public function getInformation(): CashAccountLookupInformation
    {
        return $this->information;
    }
}