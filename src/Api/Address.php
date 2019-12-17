<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\AddressDetails;
use SonOfLiberty\BitcoinComRest\Models\AddressTransactions;
use SonOfLiberty\BitcoinComRest\Models\AddressUnconfirmed;
use SonOfLiberty\BitcoinComRest\Models\AddressUtxo;

class Address extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/address";
    }

    public function details(string $address): AddressDetails
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/details/$address");
        $response = $this->send($request);

        /** @var AddressDetails $model */
        $model = $this->deserialize($response->getBody()->getContents(), AddressDetails::class);

        return $model;
    }

    public function bulkDetails(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/details", [], $body);
        $response = $this->send($request);

        /** @var AddressDetails[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . AddressDetails::class . ">");

        return $model;
    }

    public function utxo(string $address): AddressUtxo
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/utxo/$address");
        $response = $this->send($request);

        /** @var AddressUtxo $model */
        $model = $this->deserialize($response->getBody()->getContents(), AddressUtxo::class);

        return $model;
    }

    public function bulkUtxo(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/utxo", [], $body);
        $response = $this->send($request);

        /** @var AddressUtxo[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . AddressUtxo::class . ">");

        return $model;
    }

    public function unconfirmed(string $address): AddressUnconfirmed
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/unconfirmed/$address");
        $response = $this->send($request);

        /** @var AddressUnconfirmed $model */
        $model = $this->deserialize($response->getBody()->getContents(), AddressUnconfirmed::class);

        return $model;
    }

    public function bulkUnconfirmed(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/unconfirmed", [], $body);
        $response = $this->send($request);

        /** @var AddressUnconfirmed[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . AddressUnconfirmed::class . ">");

        return $model;
    }

    public function transactions(string $address): AddressTransactions
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/transactions/$address");
        $response = $this->send($request);

        /** @var AddressTransactions $model */
        $model = $this->deserialize($response->getBody()->getContents(), AddressTransactions::class);

        return $model;
    }

    public function bulkTransactions(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/transactions", [], $body);
        $response = $this->send($request);

        /** @var AddressTransactions[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . AddressTransactions::class . ">");

        return $model;
    }
}