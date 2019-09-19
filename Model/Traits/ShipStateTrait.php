<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ShipStateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ship_state")
     * @Serializer\Type("string")
     */
    private $shipState;

    /**
     * @inheritdoc
     */
    public function getShipState(): ?string
    {
        return $this->shipState;
    }

    /**
     * @inheritdoc
     */
    public function setShipState(?string $shipState)
    {
        $this->shipState = $shipState;

        return $this;
    }

}