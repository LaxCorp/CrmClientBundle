<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillCityTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("bill_city")
     * @Serializer\Type("string")
     */
    private $billCity;

    /**
     * @inheritdoc
     */
    public function getBillCity(): ?string
    {
        return $this->billCity;
    }

    /**
     * @inheritdoc
     */
    public function setBillCity(?string $billCity)
    {
        $this->billCity = $billCity;

        return $this;
    }

}