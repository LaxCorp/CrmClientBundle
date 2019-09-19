<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ShipCityTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ship_city")
     * @Serializer\Type("string")
     */
    private $shipCity;

    /**
     * @inheritdoc
     */
    public function getShipCity(): ?string
    {
        return $this->shipCity;
    }

    /**
     * @inheritdoc
     */
    public function setShipCity(?string $shipCity)
    {
        $this->shipCity = $shipCity;

        return $this;
    }

}