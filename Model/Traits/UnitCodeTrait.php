<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait UnitCodeTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("unit_code")
     * @Serializer\Type("string")
     */
    private $unitCode;

    /**
     * @inheritdoc
     */
    public function getUnitCode(): ?string
    {
        return $this->unitCode;
    }

    /**
     * @inheritdoc
     */
    public function setUnitCode(?string $unitCode)
    {
        $this->unitCode = $unitCode;

        return $this;
    }

}