<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ConsignmentNoTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("consignment_no")
     * @Serializer\Type("string")
     */
    private $consignmentNo;

    /**
     * @inheritdoc
     */
    public function getConsignmentNo(): ?string
    {
        return $this->consignmentNo;
    }

    /**
     * @inheritdoc
     */
    public function setConsignmentNo(?string $consignmentNo)
    {
        $this->consignmentNo = $consignmentNo;

        return $this;
    }

}