<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class Fees
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base")
     */
    private $base = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("modified")
     */
    private $modified = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("ancestor")
     */
    private $ancestor = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("descendant")
     */
    private $descendant = 0.0;

    /**
     * @return float
     */
    public function getBase(): float
    {
        return $this->base;
    }

    /**
     * @return float
     */
    public function getModified(): float
    {
        return $this->modified;
    }

    /**
     * @return float
     */
    public function getAncestor(): float
    {
        return $this->ancestor;
    }

    /**
     * @return float
     */
    public function getDescendant(): float
    {
        return $this->descendant;
    }
}