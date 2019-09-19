<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait Tax2Trait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("tax2")
     * @Serializer\Type("string")
     */
    private $tax2;

    /**
     * @inheritdoc
     */
    public function getTax2(): ?string
    {
        return $this->tax2;
    }

    /**
     * @inheritdoc
     */
    public function setTax2(?string $tax2)
    {
        $this->tax2 = $tax2;

        return $this;
    }

}