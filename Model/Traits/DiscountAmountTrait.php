<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DiscountAmountTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("discount_amount")
     * @Serializer\Type("string")
     */
    private $discountAmount;

    /**
     * @inheritdoc
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * @inheritdoc
     */
    public function setDiscountAmount(?string $discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

}