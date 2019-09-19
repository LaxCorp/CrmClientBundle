<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ListPriceTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("listprice")
     * @Serializer\Type("string")
     */
    private $listPrice;

    /**
     * @inheritdoc
     */
    public function getListPrice(): ?string
    {
        return $this->listPrice;
    }

    /**
     * @inheritdoc
     */
    public function setListPrice(?string $listPrice)
    {
        $this->listPrice = $listPrice;

        return $this;
    }

}