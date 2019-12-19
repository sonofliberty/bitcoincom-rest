<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class CashAccountCheck
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("identifier")
     */
    private $identifier;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("block")
     */
    private $block = 0;

    /**
     * @var CashAccountCheckResult[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\CashAccountCheckResult>")
     * @Serializer\SerializedName("results")
     */
    private $results = [];

    /**
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @return int
     */
    public function getBlock(): int
    {
        return $this->block;
    }

    /**
     * @return CashAccountCheckResult[]
     */
    public function getResults(): array
    {
        return $this->results;
    }
}