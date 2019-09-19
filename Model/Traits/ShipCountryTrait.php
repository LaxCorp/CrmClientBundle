<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ShipCountryTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ship_country")
     * @Serializer\Type("string")
     */
    private $shipCountry;

    /**
     * @inheritdoc
     */
    public function getShipCountry(): ?string
    {
        return $this->shipCountry;
    }

    /**
     * @inheritdoc
     */
    public function setShipCountry(?string $shipCountry)
    {
        $this->shipCountry = $shipCountry;

        return $this;
    }

}