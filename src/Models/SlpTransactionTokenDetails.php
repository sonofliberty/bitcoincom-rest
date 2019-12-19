<?php

namespace SonOfLiberty\BitcoinComRest\Models;

use JMS\Serializer\Annotation as Serializer;

class SlpTransactionTokenDetails
{
    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("valid")
     */
    private $valid = false;

    /**
     * @var SlpTransactionTokenDetailsDetail
     *
     * @Serializer\Type("SonOfLiberty\BitcoinComRest\Models\SlpTransactionTokenDetailsDetail")
     * @Serializer\SerializedName("detail")
     */
    private $detail;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invalidReason")
     */
    private $invalidReason;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("schema_version")
     */
    private $schemaVersion = 0;

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @return SlpTransactionTokenDetailsDetail
     */
    public function getDetail(): SlpTransactionTokenDetailsDetail
    {
        return $this->detail;
    }

    /**
     * @return string|null
     */
    public function getInvalidReason(): ?string
    {
        return $this->invalidReason;
    }

    /**
     * @return int
     */
    public function getSchemaVersion(): int
    {
        return $this->schemaVersion;
    }
}