<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class MempoolEntry
{
    /**
     * @var Fees|null
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\Fees")
     * @Serializer\SerializedName("fees")
     */
    private $fees;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size")
     */
    private $size = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fee")
     */
    private $fee = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("modifiedFee")
     */
    private $modifiedFee = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("time")
     */
    private $time = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     */
    private $height = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("startingpriority")
     */
    private $startingpriority = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("currentpriority")
     */
    private $currentpriority = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("descendantcount")
     */
    private $descendantcount = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("descendantsize")
     */
    private $descendantsize = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("descendantfees")
     */
    private $descendantfees = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ancestorcount")
     */
    private $ancestorcount = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ancestorsize")
     */
    private $ancestorsize = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ancestorfees")
     */
    private $ancestorfees = 0;

    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("depends")
     */
    private $depends = [];

    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("spentby")
     */
    private $spentby = [];

    /**
     * @return Fees|null
     */
    public function getFees(): ?Fees
    {
        return $this->fees;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return float
     */
    public function getFee(): float
    {
        return $this->fee;
    }

    /**
     * @return float
     */
    public function getModifiedFee(): float
    {
        return $this->modifiedFee;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getStartingpriority(): int
    {
        return $this->startingpriority;
    }

    /**
     * @return int
     */
    public function getCurrentpriority(): int
    {
        return $this->currentpriority;
    }

    /**
     * @return int
     */
    public function getDescendantcount(): int
    {
        return $this->descendantcount;
    }

    /**
     * @return int
     */
    public function getDescendantsize(): int
    {
        return $this->descendantsize;
    }

    /**
     * @return int
     */
    public function getDescendantfees(): int
    {
        return $this->descendantfees;
    }

    /**
     * @return int
     */
    public function getAncestorcount(): int
    {
        return $this->ancestorcount;
    }

    /**
     * @return int
     */
    public function getAncestorsize(): int
    {
        return $this->ancestorsize;
    }

    /**
     * @return int
     */
    public function getAncestorfees(): int
    {
        return $this->ancestorfees;
    }

    /**
     * @return string[]
     */
    public function getDepends(): array
    {
        return $this->depends;
    }

    /**
     * @return string[]
     */
    public function getSpentby(): array
    {
        return $this->spentby;
    }
}