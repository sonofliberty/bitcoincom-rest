<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\ValidateAddress;

class Util extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/util";
    }

    public function validateAddress(string $address): ValidateAddress
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/validateAddress/$address");
        $response = $this->send($request);

        /** @var ValidateAddress $model */
        $model = $this->deserialize($response->getBody()->getContents(), ValidateAddress::class);

        return $model;
    }

    public function validateAddressBulk(array $addresses): array
    {
        $body = json_encode(['addresses' => $addresses]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/validateAddress", [], $body);
        $response = $this->send($request);

        /** @var ValidateAddress[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . ValidateAddress::class . ">");

        return $model;
    }
}