<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ProductIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("productid")
     * @Serializer\Type("string")
     */
    private $productId;

    /**
     * @inheritdoc
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @inheritdoc
     */
    public function setProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

}