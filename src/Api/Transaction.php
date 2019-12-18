<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\TransactionDetails;

class Transaction extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/transaction";
    }

    public function details(string $txid): TransactionDetails
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/details/$txid");
        $response = $this->send($request);

        /** @var TransactionDetails $model */
        $model = $this->deserialize($response->getBody()->getContents(), TransactionDetails::class);

        return $model;
    }

    public function detailsBulk(array $txids): array
    {
        $body = json_encode(['txids' => $txids]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/details", [], $body);
        $response = $this->send($request);

        /** @var TransactionDetails[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . TransactionDetails::class . ">");

        return $model;
    }
}