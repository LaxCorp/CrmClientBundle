<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait GoodsConsignmentNoTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("goods_consignment_no")
     * @Serializer\Type("string")
     */
    private $goodsConsignmentNo;

    /**
     * @inheritdoc
     */
    public function getGoodsConsignmentNo(): ?string
    {
        return $this->goodsConsignmentNo;
    }

    /**
     * @inheritdoc
     */
    public function setGoodsConsignmentNo(?string $goodsConsignmentNo)
    {
        $this->goodsConsignmentNo = $goodsConsignmentNo;

        return $this;
    }

}