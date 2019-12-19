<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\DecodeRawTransaction;
use SonOfLiberty\BitcoinComRest\Models\DecodeScript;

class Rawtransactions extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/rawtransactions";
    }

    public function decodeRawTransaction(string $hex): DecodeRawTransaction
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/decodeRawTransaction/$hex");
        $response = $this->send($request);

        /** @var DecodeRawTransaction $model */
        $model = $this->deserialize($response->getBody()->getContents(), DecodeRawTransaction::class);

        return $model;
    }

    public function decodeRawTransactionBulk(array $hexes): array
    {
        $body = json_encode(['hexes' => $hexes]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/decodeRawTransaction", [], $body);
        $response = $this->send($request);

        /** @var DecodeRawTransaction[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . DecodeRawTransaction::class . ">");

        return $model;
    }

    public function decodeScript(string $hex): DecodeScript
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/decodeScript/$hex");
        $response = $this->send($request);

        /** @var DecodeScript $model */
        $model = $this->deserialize($response->getBody()->getContents(), DecodeScript::class);

        return $model;
    }

    public function decodeScriptBulk(array $hexes): array
    {
        $body = json_encode(['hexes' => $hexes]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/decodeScript", [], $body);
        $response = $this->send($request);

        /** @var DecodeScript[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . DecodeScript::class . ">");

        return $model;
    }

    public function getRawTransaction(string $txid): string
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getRawTransaction/$txid?" . http_build_query(['verbose' => 'false']));
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function getRawTransactionBulk(array $txids): array
    {
        $body = json_encode(['txids' => $txids, 'verbose' => false]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/getRawTransaction", [], $body);
        $response = $this->send($request);

        /** @var string[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string>");

        return $model;
    }

    public function sendRawTransaction(string $hex): string
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/sendRawTransaction/$hex");
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function sendRawTransactionBulk(array $hexes): array
    {
        $body = json_encode(['hexes' => $hexes]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/sendRawTransaction", [], $body);
        $response = $this->send($request);

        /** @var string[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string>");

        return $model;
    }
}