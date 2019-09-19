<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ExpiryDateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("expiry_date")
     * @Serializer\Type("string")
     */
    private $expiryDate;

    /**
     * @inheritdoc
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * @inheritdoc
     */
    public function setExpiryDate(?string $expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

}