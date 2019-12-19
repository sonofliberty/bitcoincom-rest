<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\SlpAddressBalance;
use SonOfLiberty\BitcoinComRest\Models\SlpBalance;
use SonOfLiberty\BitcoinComRest\Models\SlpBurnTotal;
use SonOfLiberty\BitcoinComRest\Models\SlpConvert;
use SonOfLiberty\BitcoinComRest\Models\SlpToken;
use SonOfLiberty\BitcoinComRest\Models\SlpTokenBalance;
use SonOfLiberty\BitcoinComRest\Models\SlpTransaction;
use SonOfLiberty\BitcoinComRest\Models\SlpTransactionDetails;
use SonOfLiberty\BitcoinComRest\Models\SlpValidateTxid;

class Slp extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/slp";
    }

    public function list(?array $tokenIds = []): array
    {
        if (count($tokenIds) < 1) {
            $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/list");
        } else {
            $body = json_encode(['tokenIds' => $tokenIds]);
            $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/list", [], $body);
        }

        $response = $this->send($request);

        /** @var SlpToken[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . SlpToken::class . ">");

        return $model;
    }

    public function details(string $tokenId): SlpToken
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/list/$tokenId");
        $response = $this->send($request);

        /** @var SlpToken $model */
        $model = $this->deserialize($response->getBody()->getContents(), SlpToken::class);

        return $model;
    }

    public function convert(string $address): SlpConvert
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/convert/$address");
        $response = $this->send($request);

        /** @var SlpConvert $model */
        $model = $this->deserialize($response->getBody()->getContents(), SlpConvert::class);

        return $model;
    }

    public function convertBulk(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/convert", [], $body);
        $response = $this->send($request);

        /** @var SlpConvert[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . SlpConvert::class . ">");

        return $model;
    }

    public function balancesForAddress(string $address): array
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/balancesForAddress/$address");
        $response = $this->send($request);

        /** @var SlpBalance[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . SlpBalance::class . ">");

        return $model;
    }

    public function balancesForAddressBulk(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/balancesForAddress", [], $body);
        $response = $this->send($request);

        /** @var SlpConvert[][] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<array<" . SlpBalance::class . ">>");

        return $model;
    }

    public function balancesForToken(string $tokenId): array
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/balancesForToken/$tokenId");
        $response = $this->send($request);

        /** @var SlpTokenBalance[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . SlpTokenBalance::class . ">");

        return $model;
    }

    public function balancesForTokenBulk(array $tokenIds): array
    {
        $body = json_encode(['tokenIds' => $tokenIds]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/balancesForToken", [], $body);
        $response = $this->send($request);

        /** @var SlpTokenBalance[][] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<array<" . SlpTokenBalance::class . ">>");

        return $model;
    }

    public function balance(string $address, string $tokenId): SlpAddressBalance
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/balance/$address/$tokenId");
        $response = $this->send($request);

        /** @var SlpAddressBalance $model */
        $model = $this->deserialize($response->getBody()->getContents(), SlpAddressBalance::class);

        return $model;
    }

    public function validateTxid(string $txid): SlpValidateTxid
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/validateTxid/$txid");
        $response = $this->send($request);

        /** @var SlpValidateTxid $model */
        $model = $this->deserialize($response->getBody()->getContents(), SlpValidateTxid::class);

        return $model;
    }

    public function validateTxidBulk(array $txids): array
    {
        $body = json_encode(['txids' => $txids]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/validateTxid", [], $body);
        $response = $this->send($request);

        /** @var SlpValidateTxid[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . SlpValidateTxid::class . ">");

        return $model;
    }

    public function txDetails(string $txid): SlpTransactionDetails
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/txDetails/$txid");
        $response = $this->send($request);

        /** @var SlpTransactionDetails $model */
        $model = $this->deserialize($response->getBody()->getContents(), SlpTransactionDetails::class);

        return $model;
    }

    public function transactions(string $tokenId, string $address): array
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/transactions/$tokenId/$address");
        $response = $this->send($request);

        /** @var SlpTransaction[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . SlpTransaction::class . ">");

        return $model;
    }

    public function burnTotal(string $transactionId): SlpBurnTotal
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/burnTotal/$transactionId");
        $response = $this->send($request);

        /** @var SlpBurnTotal $model */
        $model = $this->deserialize($response->getBody()->getContents(), SlpBurnTotal::class);

        return $model;
    }
}