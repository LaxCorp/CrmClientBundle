<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServiceNoTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("service_no")
     * @Serializer\Type("string")
     */
    private $serviceNo;

    /**
     * @inheritdoc
     */
    public function getServiceNo(): ?string
    {
        return $this->serviceNo;
    }

    /**
     * @inheritdoc
     */
    public function setServiceNo(?string $serviceNo)
    {
        $this->serviceNo = $serviceNo;

        return $this;
    }

}