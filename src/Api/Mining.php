<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\MiningInfo;

class Mining extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/mining";
    }

    public function getMiningInfo(): MiningInfo
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getMiningInfo");
        $response = $this->send($request);

        /** @var MiningInfo $model */
        $model = $this->deserialize($response->getBody()->getContents(), MiningInfo::class);

        return $model;
    }

    public function getNetworkHashps(int $blocks, int $height): int
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getNetworkHashps?" . http_build_query(['blocks' => $blocks, 'height' => $height]));
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }
}