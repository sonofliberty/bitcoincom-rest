<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class BlockDetails
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hash")
     */
    private $hash;

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
     * @Serializer\SerializedName("height")
     */
    private $height = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("version")
     */
    private $version = 0;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("merkleroot")
     */
    private $merkleroot;

    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("tx")
     */
    private $tx = [];

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
     * @Serializer\SerializedName("nonce")
     */
    private $nonce = 0;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bits")
     */
    private $bits;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("difficulty")
     */
    private $difficulty = 0.0;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chainwork")
     */
    private $chainwork;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("confirmations")
     */
    private $confirmations = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("previousblockhash")
     */
    private $previousblockhash;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("nextblockhash")
     */
    private $nextblockhash;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("reward")
     */
    private $reward = 0.0;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isMainChain")
     */
    private $isMainChain = true;

    /**
     * @var PoolInfo
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\PoolInfo")
     * @Serializer\SerializedName("poolInfo")
     */
    private $poolInfo;

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

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
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getMerkleroot(): string
    {
        return $this->merkleroot;
    }

    /**
     * @return string[]
     */
    public function getTx(): array
    {
        return $this->tx;
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
    public function getNonce(): int
    {
        return $this->nonce;
    }

    /**
     * @return string
     */
    public function getBits(): string
    {
        return $this->bits;
    }

    /**
     * @return float
     */
    public function getDifficulty(): float
    {
        return $this->difficulty;
    }

    /**
     * @return string
     */
    public function getChainwork(): string
    {
        return $this->chainwork;
    }

    /**
     * @return int
     */
    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    /**
     * @return string|null
     */
    public function getPreviousblockhash(): ?string
    {
        return $this->previousblockhash;
    }

    /**
     * @return string|null
     */
    public function getNextblockhash(): ?string
    {
        return $this->nextblockhash;
    }

    /**
     * @return float
     */
    public function getReward(): float
    {
        return $this->reward;
    }

    /**
     * @return bool
     */
    public function isMainChain(): bool
    {
        return $this->isMainChain;
    }

    /**
     * @return PoolInfo
     */
    public function getPoolInfo(): PoolInfo
    {
        return $this->poolInfo;
    }
}