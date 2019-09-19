<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ShipStreetTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ship_street")
     * @Serializer\Type("string")
     */
    private $shipStreet;

    /**
     * @inheritdoc
     */
    public function getShipStreet(): ?string
    {
        return $this->shipStreet;
    }

    /**
     * @inheritdoc
     */
    public function setShipStreet(?string $shipStreet)
    {
        $this->shipStreet = $shipStreet;

        return $this;
    }

}