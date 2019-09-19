<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait UnitPriceTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("unit_price")
     * @Serializer\Type("string")
     */
    private $unitPrice;

    /**
     * @inheritdoc
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * @inheritdoc
     */
    public function setUnitPrice(?string $unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

}