<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait QuantityTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("quantity")
     * @Serializer\Type("string")
     */
    private $quantity;

    /**
     * @inheritdoc
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * @inheritdoc
     */
    public function setQuantity(?string $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

}