<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class CashAccountReverseLookup
{
    /**
     * @var CashAccountReverseLookupResult[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\CashAccountReverseLookupResult>")
     * @Serializer\SerializedName("results")
     */
    private $results = [];

    /**
     * @return CashAccountReverseLookupResult[]
     */
    public function getResults(): array
    {
        return $this->results;
    }
}