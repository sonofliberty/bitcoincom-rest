<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\CashAccountCheck;
use SonOfLiberty\BitcoinComRest\Models\CashAccountLookup;
use SonOfLiberty\BitcoinComRest\Models\CashAccountReverseLookup;

class CashAccounts extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/cashAccounts";
    }

    public function lookup(string $account, float $number, ?string $collision = null): CashAccountLookup
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/lookup/$account/$number/$collision");
        $response = $this->send($request);

        /** @var CashAccountLookup $model */
        $model = $this->deserialize($response->getBody()->getContents(), CashAccountLookup::class);

        return $model;
    }

    public function check(string $account, float $number): CashAccountCheck
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/check/$account/$number");
        $response = $this->send($request);

        /** @var CashAccountCheck $model */
        $model = $this->deserialize($response->getBody()->getContents(), CashAccountCheck::class);

        return $model;
    }

    public function reverselookup(string $address): CashAccountReverseLookup
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/reverselookup/$address");
        $response = $this->send($request);

        /** @var CashAccountReverseLookup $model */
        $model = $this->deserialize($response->getBody()->getContents(), CashAccountReverseLookup::class);

        return $model;
    }
}