<?php

namespace SonOfLiberty\BitcoinComRest;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\ClientInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use SonOfLiberty\BitcoinComRest\Api\Address;
use SonOfLiberty\BitcoinComRest\Api\Block;
use SonOfLiberty\BitcoinComRest\Api\Blockchain;
use SonOfLiberty\BitcoinComRest\Api\CashAccounts;
use SonOfLiberty\BitcoinComRest\Api\Control;
use SonOfLiberty\BitcoinComRest\Api\Mining;
use SonOfLiberty\BitcoinComRest\Api\Rawtransactions;
use SonOfLiberty\BitcoinComRest\Api\Slp;
use SonOfLiberty\BitcoinComRest\Api\Transaction;
use SonOfLiberty\BitcoinComRest\Api\Util;

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
        $this->httpClient = null !== $httpClient ? $httpClient : new \GuzzleHttp\Client(['timeout' => 5]);
        $this->serializer = null !== $serializer ? $serializer : SerializerBuilder::create()->build();
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

    public function blockchain(): Blockchain
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Blockchain($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function control(): Control
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Control($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function mining(): Mining
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Mining($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function rawtransactions(): Rawtransactions
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Rawtransactions($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function transaction(): Transaction
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Transaction($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function util(): Util
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Util($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function slp(): Slp
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new Slp($this->restUrl, $this->httpClient, $this->serializer));
    }

    public function cashAccounts(): CashAccounts
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : (new CashAccounts($this->restUrl, $this->httpClient, $this->serializer));
    }
}