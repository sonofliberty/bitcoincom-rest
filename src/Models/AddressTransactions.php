<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class AddressTransactions
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pagesTotal")
     */
    private $pagesTotal = 0;

    /**
     * @var TransactionDetails[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\TransactionDetails>")
     * @Serializer\SerializedName("txs")
     */
    private $transactions = [];

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("legacyAddress")
     */
    private $legacyAddress;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cashAddress")
     */
    private $cashAddress;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("currentPage")
     */
    private $currentPage = 0;

    /**
     * @return int
     */
    public function getPagesTotal(): int
    {
        return $this->pagesTotal;
    }

    /**
     * @return TransactionDetails[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @return string|null
     */
    public function getLegacyAddress(): ?string
    {
        return $this->legacyAddress;
    }

    /**
     * @return string|null
     */
    public function getCashAddress(): ?string
    {
        return $this->cashAddress;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }
}