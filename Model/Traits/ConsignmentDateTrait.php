<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ConsignmentDateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("consignmentdate")
     * @Serializer\Type("string")
     */
    private $consignmentDate;

    /**
     * @inheritdoc
     */
    public function getConsignmentDate(): ?string
    {
        return $this->consignmentDate;
    }

    /**
     * @inheritdoc
     */
    public function setConsignmentDate(?string $consignmentDate)
    {
        $this->consignmentDate = $consignmentDate;

        return $this;
    }

}