<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait HasGoodsConsignmentTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("has_goods_consignment")
     * @Serializer\Type("string")
     */
    private $hasGoodsConsignment;

    /**
     * @inheritdoc
     */
    public function getHasGoodsConsignment(): ?string
    {
        return $this->hasGoodsConsignment;
    }

    /**
     * @inheritdoc
     */
    public function setHasGoodsConsignment(?string $hasGoodsConsignment)
    {
        $this->hasGoodsConsignment = $hasGoodsConsignment;

        return $this;
    }

}