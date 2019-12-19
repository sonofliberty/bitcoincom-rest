<?php

namespace SonOfLiberty\BitcoinComRest\Api;

use SonOfLiberty\BitcoinComRest\Models\BlockchainInfo;
use SonOfLiberty\BitcoinComRest\Models\BlockHeader;
use SonOfLiberty\BitcoinComRest\Models\ChainTip;
use SonOfLiberty\BitcoinComRest\Models\MempoolEntry;
use SonOfLiberty\BitcoinComRest\Models\MempoolInfo;
use SonOfLiberty\BitcoinComRest\Models\TxOut;

class Blockchain extends AbstractApi
{
    protected function baseUrl(): string
    {
        return "{$this->restUrl}/blockchain";
    }

    public function getBestBlockHash(): string
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getBestBlockHash");
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function getBlockchainInfo(): BlockchainInfo
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getBlockchainInfo");
        $response = $this->send($request);

        /** @var BlockchainInfo $model */
        $model = $this->deserialize($response->getBody()->getContents(), BlockchainInfo::class);

        return $model;
    }

    public function getBlockCount(): int
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getBlockCount");
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function getBlockHeader(string $hash): BlockHeader
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getBlockHeader/$hash?" . http_build_query(['verbose' => 'true']));
        $response = $this->send($request);

        /** @var BlockHeader $model */
        $model = $this->deserialize($response->getBody()->getContents(), BlockHeader::class);

        return $model;
    }

    public function getBlockHeaderHex(string $hash): string
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getBlockHeader/$hash");
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function getBlockHeaderBulk(array $hashes): array
    {
        $body = json_encode(['hashes' => $hashes, 'verbose' => true]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/getBlockHeader", [], $body);
        $response = $this->send($request);

        /** @var BlockHeader[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . BlockHeader::class . ">");

        return $model;
    }

    public function getBlockHeaderBulkHex(array $hashes): array
    {
        $body = json_encode(['hashes' => $hashes, 'verbose' => false]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/getBlockHeader", [], $body);
        $response = $this->send($request);

        /** @var string[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string>");

        return $model;
    }

    public function getChainTips(): array
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getChainTips");
        $response = $this->send($request);

        /** @var ChainTip[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . ChainTip::class . ">");

        return $model;
    }

    public function getDifficulty(): float
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getDifficulty");
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function getMempoolEntry(string $txid): MempoolEntry
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getMempoolEntry/$txid");
        $response = $this->send($request);

        /** @var MempoolEntry $model */
        $model = $this->deserialize($response->getBody()->getContents(), MempoolEntry::class);

        return $model;
    }

    public function getMempoolEntryBulk(array $txids): array
    {
        $body = json_encode(['txids' => $txids]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/getMempoolEntry", [], $body);
        $response = $this->send($request);

        /** @var MempoolEntry[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<" . MempoolEntry::class . ">");

        return $model;
    }

    public function getMempoolInfo(): MempoolInfo
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getMempoolInfo");
        $response = $this->send($request);

        /** @var MempoolInfo $model */
        $model = $this->deserialize($response->getBody()->getContents(), MempoolInfo::class);

        return $model;
    }

    public function getRawMempool(): array
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getRawMempool?" . http_build_query(['verbose' => 'true']));
        $response = $this->send($request);

        /** @var array<string, MempoolEntry> $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string, " . MempoolEntry::class . ">");

        return $model;
    }

    public function getTxOut(string $txid, int $n, ?bool $mempool = false): TxOut
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getTxOut/$txid/$n" . http_build_query(['mempool' => $mempool ? 'true' : 'false']));
        $response = $this->send($request);

        /** @var TxOut $model */
        $model = $this->deserialize($response->getBody()->getContents(), TxOut::class);

        return $model;
    }

    public function getTxOutProof(string $txid): string
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/getTxOutProof/$txid");
        $response = $this->send($request);

        return $response->getBody()->getContents();
    }

    public function getTxOutProofBulk(array $txids): array
    {
        $body = json_encode(['txids' => $txids]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/getTxOutProof", [], $body);
        $response = $this->send($request);

        /** @var string[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string>");

        return $model;
    }

    public function verifyTxOutProof(string $proof): array
    {
        $request = $this->messageFactory->createRequest('GET', "{$this->baseUrl()}/verifyTxOutProof/$proof");
        $response = $this->send($request);

        /** @var string[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string>");

        return $model;
    }

    public function verifyTxOutProofBulk(array $proofs): array
    {
        $body = json_encode(['proofs' => $proofs]);
        $request = $this->messageFactory->createRequest('POST', "{$this->baseUrl()}/verifyTxOutProof", [], $body);
        $response = $this->send($request);

        /** @var string[] $model */
        $model = $this->deserialize($response->getBody()->getContents(), "array<string>");

        return $model;
    }
}