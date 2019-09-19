<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait Tax3Trait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("tax3")
     * @Serializer\Type("string")
     */
    private $tax3;

    /**
     * @inheritdoc
     */
    public function getTax3(): ?string
    {
        return $this->tax3;
    }

    /**
     * @inheritdoc
     */
    public function setTax3(?string $tax3)
    {
        $this->tax3 = $tax3;

        return $this;
    }

}