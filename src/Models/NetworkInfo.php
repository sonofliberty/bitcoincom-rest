<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class NetworkInfo
{
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
     * @Serializer\SerializedName("subversion")
     */
    private $subversion;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("protocolversion")
     */
    private $protocolversion = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("localservices")
     */
    private $localservices;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("localrelay")
     */
    private $localrelay = false;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("timeoffset")
     */
    private $timeoffset = 0;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("networkactive")
     */
    private $networkactive = false;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("connections")
     */
    private $connections = 0;

    /**
     * @var NetworkInfoNetwork[]
     *
     * @Serializer\Type("array<SonOfLiberty\BitcoinComRest\Models\NetworkInfoNetwork>")
     * @Serializer\SerializedName("networks")
     */
    private $networks;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("relayfee")
     */
    private $relayfee = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("excessutxocharge")
     */
    private $excessutxocharge = 0;

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
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return string|null
     */
    public function getSubversion(): ?string
    {
        return $this->subversion;
    }

    /**
     * @return int
     */
    public function getProtocolversion(): int
    {
        return $this->protocolversion;
    }

    /**
     * @return string|null
     */
    public function getLocalservices(): ?string
    {
        return $this->localservices;
    }

    /**
     * @return bool
     */
    public function isLocalrelay(): bool
    {
        return $this->localrelay;
    }

    /**
     * @return int
     */
    public function getTimeoffset(): int
    {
        return $this->timeoffset;
    }

    /**
     * @return bool
     */
    public function isNetworkactive(): bool
    {
        return $this->networkactive;
    }

    /**
     * @return int
     */
    public function getConnections(): int
    {
        return $this->connections;
    }

    /**
     * @return NetworkInfoNetwork[]
     */
    public function getNetworks(): array
    {
        return $this->networks;
    }

    /**
     * @return float
     */
    public function getRelayfee(): float
    {
        return $this->relayfee;
    }

    /**
     * @return int
     */
    public function getExcessutxocharge(): int
    {
        return $this->excessutxocharge;
    }

    /**
     * @return string|null
     */
    public function getWarnings(): ?string
    {
        return $this->warnings;
    }
}