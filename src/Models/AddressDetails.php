<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class AddressDetails
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("balance")
     */
    private $balance = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("balanceSat")
     */
    private $balanceSat = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("totalReceived")
     */
    private $totalReceived = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("totalReceivedSat")
     */
    private $totalReceivedSat = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("totalSent")
     */
    private $totalSent = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("totalSentSat")
     */
    private $totalSentSat = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("unconfirmedBalance")
     */
    private $unconfirmedBalance = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("unconfirmedBalanceSat")
     */
    private $unconfirmedBalanceSat = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("unconfirmedTxApperances")
     */
    private $unconfirmedTxAppearances = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("txApperances")
     */
    private $txAppearances = 0;

    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("transactions")
     */
    private $transactions;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("legacyAddress")
     */
    private $legacyAddress;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cashAddress")
     */
    private $cashAddress;

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getBalanceSat(): int
    {
        return $this->balanceSat;
    }

    /**
     * @return float
     */
    public function getTotalReceived(): float
    {
        return $this->totalReceived;
    }

    /**
     * @return int
     */
    public function getTotalReceivedSat(): int
    {
        return $this->totalReceivedSat;
    }

    /**
     * @return float
     */
    public function getTotalSent(): float
    {
        return $this->totalSent;
    }

    /**
     * @return int
     */
    public function getTotalSentSat(): int
    {
        return $this->totalSentSat;
    }

    /**
     * @return float
     */
    public function getUnconfirmedBalance(): float
    {
        return $this->unconfirmedBalance;
    }

    /**
     * @return int
     */
    public function getUnconfirmedBalanceSat(): int
    {
        return $this->unconfirmedBalanceSat;
    }

    /**
     * @return int
     */
    public function getUnconfirmedTxAppearances(): int
    {
        return $this->unconfirmedTxAppearances;
    }

    /**
     * @return int
     */
    public function getTxAppearances(): int
    {
        return $this->txAppearances;
    }

    /**
     * @return string[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @return string
     */
    public function getLegacyAddress(): string
    {
        return $this->legacyAddress;
    }

    /**
     * @return string
     */
    public function getCashAddress(): string
    {
        return $this->cashAddress;
    }
}