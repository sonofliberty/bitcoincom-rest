<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use GuzzleHttp\ClientInterface;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractApi
{
    protected $restUrl;

    protected $messageFactory;

    private $httpClient;

    private $serializer;

    public function __construct(string $restUrl, ClientInterface $httpClient, SerializerInterface $serializer)
    {
        $this->restUrl = $restUrl;
        $this->messageFactory = new GuzzleMessageFactory();
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
    }

    protected function send(RequestInterface $request): ResponseInterface
    {
        $request = $request
            ->withAddedHeader('Accept', 'application/json')
            ->withAddedHeader('Content-Type', 'application/json')
            ->withAddedHeader('User-Agent', 'sonofliberty/bitcoincom-rest');

        return $this->httpClient->send($request);
    }

    protected function deserialize(string $data, string $class)
    {
        return $this->serializer->deserialize($data, $class, 'json');
    }

    protected abstract function baseUrl(): string;
}