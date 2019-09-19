<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServiceUsageUnitTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("service_usageunit")
     * @Serializer\Type("string")
     */
    private $serviceUsageUnit;

    /**
     * @inheritdoc
     */
    public function getServiceUsageUnit(): ?string
    {
        return $this->serviceUsageUnit;
    }

    /**
     * @inheritdoc
     */
    public function setServiceUsageUnit(?string $serviceUsageUnit)
    {
        $this->serviceUsageUnit = $serviceUsageUnit;

        return $this;
    }

}