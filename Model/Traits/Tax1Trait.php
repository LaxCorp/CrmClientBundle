<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait Tax1Trait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("tax1")
     * @Serializer\Type("string")
     */
    private $tax1;

    /**
     * @inheritdoc
     */
    public function getTax1(): ?string
    {
        return $this->tax1;
    }

    /**
     * @inheritdoc
     */
    public function setTax1(?string $tax1)
    {
        $this->tax1 = $tax1;

        return $this;
    }

}