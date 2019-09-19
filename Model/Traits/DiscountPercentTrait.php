<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DiscountPercentTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("discount_percent")
     * @Serializer\Type("string")
     */
    private $discountPercent;

    /**
     * @inheritdoc
     */
    public function getDiscountPercent(): ?string
    {
        return $this->discountPercent;
    }

    /**
     * @inheritdoc
     */
    public function setDiscountPercent(?string $discountPercent)
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

}