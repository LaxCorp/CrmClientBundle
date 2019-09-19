<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ShipPoboxTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ship_pobox")
     * @Serializer\Type("string")
     */
    private $shipPobox;

    /**
     * @inheritdoc
     */
    public function getShipPobox(): ?string
    {
        return $this->shipPobox;
    }

    /**
     * @inheritdoc
     */
    public function setShipPobox(?string $shipPobox)
    {
        $this->shipPobox = $shipPobox;

        return $this;
    }

}