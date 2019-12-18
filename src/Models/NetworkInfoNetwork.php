<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class NetworkInfoNetwork
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("limited")
     */
    private $limited = false;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("reachable")
     */
    private $reachable = false;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("proxy")
     */
    private $proxy;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("proxy_randomize_credentials")
     */
    private $proxyRandomizeCredentials = false;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isLimited(): bool
    {
        return $this->limited;
    }

    /**
     * @return bool
     */
    public function isReachable(): bool
    {
        return $this->reachable;
    }

    /**
     * @return string|null
     */
    public function getProxy(): ?string
    {
        return $this->proxy;
    }

    /**
     * @return bool
     */
    public function isProxyRandomizeCredentials(): bool
    {
        return $this->proxyRandomizeCredentials;
    }
}