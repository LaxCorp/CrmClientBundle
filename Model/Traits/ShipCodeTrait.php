<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ShipCodeTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ship_code")
     * @Serializer\Type("string")
     */
    private $shipCode;

    /**
     * @inheritdoc
     */
    public function getShipCode(): ?string
    {
        return $this->shipCode;
    }

    /**
     * @inheritdoc
     */
    public function setShipCode(?string $shipCode)
    {
        $this->shipCode = $shipCode;

        return $this;
    }

}