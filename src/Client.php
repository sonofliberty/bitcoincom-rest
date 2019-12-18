<?php

namespace SonOfLiberty\BitcoinComRest;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;
use SonOfLiberty\BitcoinComRest\Api\Address;
use SonOfLiberty\BitcoinComRest\Api\Block;

class Client
{
    const DEFAULT_REST_URL = 'https://rest.bitcoin.com/v2';

    private $restUrl;

    private $httpClient;

    private $serializer;

    private $factory = [];

    public function __construct(
        ?string $restUrl = self::DEFAULT_REST_URL,
        ?ClientInterface $httpClient = null,
        ?SerializerInterface $serializer = null
    ) {
        $this->restUrl = $restUrl;
        $this->httpClient = null !== $httpClient ?: new \GuzzleHttp\Client();
        $this->serializer = null !== $serializer ?: SerializerBuilder::create()->build();
        if ($this->serializer instanceof Serializer) {
            AnnotationRegistry::registerLoader('class_exists');
        }
    }

    public function address(): Address
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Address($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function block(): Block
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Block($this->restUrl, $this->httpClient, $this->serializer));
    }
}