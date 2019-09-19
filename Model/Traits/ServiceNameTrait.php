<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServiceNameTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("servicename")
     * @Serializer\Type("string")
     */
    private $serviceName;

    /**
     * @inheritdoc
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    /**
     * @inheritdoc
     */
    public function setServiceName(?string $serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

}