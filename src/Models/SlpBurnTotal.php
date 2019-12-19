<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpBurnTotal
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transactionId")
     */
    private $transactionId;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("inputTotal")
     */
    private $inputTotal = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("outputTotal")
     */
    private $outputTotal = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("burnTotal")
     */
    private $burnTotal = 0;

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @return int
     */
    public function getInputTotal(): int
    {
        return $this->inputTotal;
    }

    /**
     * @return int
     */
    public function getOutputTotal(): int
    {
        return $this->outputTotal;
    }

    /**
     * @return int
     */
    public function getBurnTotal(): int
    {
        return $this->burnTotal;
    }
}