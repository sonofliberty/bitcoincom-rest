<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class BlockchainInfo
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chain")
     */
    private $chain;

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
     * @Serializer\SerializedName("headers")
     */
    private $headers = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bestblockhash")
     */
    private $bestblockhash;

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
     * @Serializer\SerializedName("mediantime")
     */
    private $mediantime = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("verificationprogress")
     */
    private $verificationprogress = 0.0;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("initialblockdownload")
     */
    private $initialblockdownload = false;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chainwork")
     */
    private $chainwork;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size_on_disk")
     */
    private $sizeOnDisk = 0;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("pruned")
     */
    private $pruned = false;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("warnings")
     */
    private $warnings;

    /**
     * @return string|null
     */
    public function getChain(): ?string
    {
        return $this->chain;
    }

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
    public function getHeaders(): int
    {
        return $this->headers;
    }

    /**
     * @return string|null
     */
    public function getBestblockhash(): ?string
    {
        return $this->bestblockhash;
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
    public function getMediantime(): int
    {
        return $this->mediantime;
    }

    /**
     * @return float
     */
    public function getVerificationprogress(): float
    {
        return $this->verificationprogress;
    }

    /**
     * @return bool
     */
    public function isInitialblockdownload(): bool
    {
        return $this->initialblockdownload;
    }

    /**
     * @return string|null
     */
    public function getChainwork(): ?string
    {
        return $this->chainwork;
    }

    /**
     * @return int
     */
    public function getSizeOnDisk(): int
    {
        return $this->sizeOnDisk;
    }

    /**
     * @return bool
     */
    public function isPruned(): bool
    {
        return $this->pruned;
    }

    /**
     * @return string|null
     */
    public function getWarnings(): ?string
    {
        return $this->warnings;
    }
}