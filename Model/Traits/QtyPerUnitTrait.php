<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait QtyPerUnitTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("qty_per_unit")
     * @Serializer\Type("string")
     */
    private $qtyPerUnit;

    /**
     * @inheritdoc
     */
    public function getQtyPerUnit(): ?string
    {
        return $this->qtyPerUnit;
    }

    /**
     * @inheritdoc
     */
    public function setQtyPerUnit(?string $qtyPerUnit)
    {
        $this->qtyPerUnit = $qtyPerUnit;

        return $this;
    }

}