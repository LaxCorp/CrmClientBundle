<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServiceCategoryTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("servicecategory")
     * @Serializer\Type("string")
     */
    private $serviceCategory;

    /**
     * @inheritdoc
     */
    public function getServiceCategory(): ?string
    {
        return $this->serviceCategory;
    }

    /**
     * @inheritdoc
     */
    public function setServiceCategory(?string $serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;

        return $this;
    }

}