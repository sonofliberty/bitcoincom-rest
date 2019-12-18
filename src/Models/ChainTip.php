<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class ChainTip
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     */
    private $height = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hash")
     */
    private $hash;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("branchlen")
     */
    private $branchlen = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    private $status;

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @return int
     */
    public function getBranchlen(): int
    {
        return $this->branchlen;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
}