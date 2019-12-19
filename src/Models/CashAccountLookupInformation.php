<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class CashAccountLookupInformation
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("emoji")
     */
    private $emoji;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("number")
     */
    private $number = 0.0;

    /**
     * @var CashAccountLookupInfirmationCollision
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\CashAccountLookupInfirmationCollision")
     * @Serializer\SerializedName("collision")
     */
    private $collision;

    /**
     * @var CashAccountLookupInformationPayment[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\CashAccountLookupInformationPayment>")
     * @Serializer\SerializedName("payment")
     */
    private $payment = [];

    /**
     * @return string|null
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }

    /**
     * @return CashAccountLookupInfirmationCollision
     */
    public function getCollision(): CashAccountLookupInfirmationCollision
    {
        return $this->collision;
    }

    /**
     * @return CashAccountLookupInformationPayment[]
     */
    public function getPayment(): array
    {
        return $this->payment;
    }
}