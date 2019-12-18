<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class MempoolInfo
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size")
     */
    private $size = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("bytes")
     */
    private $bytes = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("usage")
     */
    private $usage = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("maxmempool")
     */
    private $maxmempool = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("mempoolminfee")
     */
    private $mempoolminfee = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("minrelaytxfee")
     */
    private $minrelaytxfee = 0.0;

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getBytes(): int
    {
        return $this->bytes;
    }

    /**
     * @return int
     */
    public function getUsage(): int
    {
        return $this->usage;
    }

    /**
     * @return int
     */
    public function getMaxmempool(): int
    {
        return $this->maxmempool;
    }

    /**
     * @return float
     */
    public function getMempoolminfee(): float
    {
        return $this->mempoolminfee;
    }

    /**
     * @return float
     */
    public function getMinrelaytxfee(): float
    {
        return $this->minrelaytxfee;
    }
}