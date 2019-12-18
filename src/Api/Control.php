<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\NetworkInfo;

class Control extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/control";
    }

    public function getNetworkInfo(): NetworkInfo
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getNetworkInfo");
        $response = $this->send($request);

        /** @var NetworkInfo $model */
        $model = $this->deserialize($response->getBody()->getContents(), NetworkInfo::class);

        return $model;
    }
}