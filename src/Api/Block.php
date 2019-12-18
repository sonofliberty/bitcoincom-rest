<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\BlockDetails;

class Block extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/block";
    }

    public function detailsByHash(string $hash): BlockDetails
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/detailsByHash/$hash");
        $response = $this->send($request);

        /** @var BlockDetails $model */
        $model = $this->deserialize($response->getBody()->getContents(), BlockDetails::class);

        return $model;
    }

    public function bulkDetailsByHash(array $hashes): array
    {
        $body = json_encode(['hashes' => $hashes]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/detailsByHash", [], $body);
        $response = $this->send($request);

        /** @var BlockDetails[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . BlockDetails::class . ">");

        return $model;
    }

    public function detailsByHeight(int $height): BlockDetails
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/detailsByHeight/$height");
        $response = $this->send($request);

        /** @var BlockDetails $model */
        $model = $this->deserialize($response->getBody()->getContents(), BlockDetails::class);

        return $model;
    }

//    This endpoint doesn't work properly
//
//    public function bulkDetailsByHeight(array $heights): array
//    {
//        $body = json_encode(['heights' => $heights]);
//        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/detailsByHeight", [], $body);
//        $response = $this->send($request);
//
//        /** @var BlockDetails[] $model */
//        $model = $this->deserialize($response->getBody()->getContents(), "array<" . BlockDetails::class . ">");
//
//        return $model;
//    }
}