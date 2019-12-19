<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class MiningInfo
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blocks")
     */
    private $blocks = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("currentblocksize")
     */
    private $currentblocksize = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("currentblocktx")
     */
    private $currentblocktx = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("difficulty")
     */
    private $difficulty = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("blockprioritypercentage")
     */
    private $blockprioritypercentage = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("networkhashps")
     */
    private $networkhashps = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pooledtx")
     */
    private $pooledtx = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chain")
     */
    private $chain;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("warnings")
     */
    private $warnings;

    /**
     * @return int
     */
    public function getBlocks(): int
    {
        return $this->blocks;
    }

    /**
     * @return int
     */
    public function getCurrentblocksize(): int
    {
        return $this->currentblocksize;
    }

    /**
     * @return int
     */
    public function getCurrentblocktx(): int
    {
        return $this->currentblocktx;
    }

    /**
     * @return float
     */
    public function getDifficulty(): float
    {
        return $this->difficulty;
    }

    /**
     * @return int
     */
    public function getBlockprioritypercentage(): int
    {
        return $this->blockprioritypercentage;
    }

    /**
     * @return int
     */
    public function getNetworkhashps(): int
    {
        return $this->networkhashps;
    }

    /**
     * @return int
     */
    public function getPooledtx(): int
    {
        return $this->pooledtx;
    }

    /**
     * @return string|null
     */
    public function getChain(): ?string
    {
        return $this->chain;
    }

    /**
     * @return string|null
     */
    public function getWarnings(): ?string
    {
        return $this->warnings;
    }
}