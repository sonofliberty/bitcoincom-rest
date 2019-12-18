<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class BlockHeader
{
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
     * @Serializer\SerializedName("confirmations")
     */
    private $confirmations = 0;

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
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("versionHex")
     */
    private $versionHex;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("merkleroot")
     */
    private $merkleroot;

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
     * @Serializer\SerializedName("mediantime")
     */
    private $mediantime = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("nonce")
     */
    private $nonce = 0;

    /**
     * @var string|null
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
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chainwork")
     */
    private $chainwork;

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
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @return int
     */
    public function getConfirmations(): int
    {
        return $this->confirmations;
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
     * @return string|null
     */
    public function getVersionHex(): ?string
    {
        return $this->versionHex;
    }

    /**
     * @return string|null
     */
    public function getMerkleroot(): ?string
    {
        return $this->merkleroot;
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
    public function getMediantime(): int
    {
        return $this->mediantime;
    }

    /**
     * @return int
     */
    public function getNonce(): int
    {
        return $this->nonce;
    }

    /**
     * @return string|null
     */
    public function getBits(): ?string
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
     * @return string|null
     */
    public function getChainwork(): ?string
    {
        return $this->chainwork;
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
}