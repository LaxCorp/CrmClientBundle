<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait OwnershipTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("ownership")
     * @Serializer\Type("string")
     */
    private $ownership;

    /**
     * @inheritdoc
     */
    public function getOwnership(): ?string
    {
        return $this->ownership;
    }

    /**
     * @inheritdoc
     */
    public function setOwnership(?string $ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

}