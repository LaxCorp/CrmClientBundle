<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SpConsignmentStatusTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("sp_consignmentstatus")
     * @Serializer\Type("string")
     */
    private $spConsignmentStatus;

    /**
     * @inheritdoc
     */
    public function getSpConsignmentStatus(): ?string
    {
        return $this->spConsignmentStatus;
    }

    /**
     * @inheritdoc
     */
    public function setSpConsignmentStatus(?string $spConsignmentStatus)
    {
        $this->spConsignmentStatus = $spConsignmentStatus;

        return $this;
    }

}