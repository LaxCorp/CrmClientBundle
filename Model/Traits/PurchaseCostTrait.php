<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait PurchaseCostTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("purchase_cost")
     * @Serializer\Type("string")
     */
    private $purchaseCost;

    /**
     * @inheritdoc
     */
    public function getPurchaseCost(): ?string
    {
        return $this->purchaseCost;
    }

    /**
     * @inheritdoc
     */
    public function setPurchaseCost(?string $purchaseCost)
    {
        $this->purchaseCost = $purchaseCost;

        return $this;
    }

}