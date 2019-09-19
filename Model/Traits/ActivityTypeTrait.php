<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ActivityTypeTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("activitytype")
     * @Serializer\Type("string")
     */
    private $activityType;

    /**
     * @inheritdoc
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * @inheritdoc
     */
    public function setActivityType(?string $activityType)
    {
        $this->activityType = $activityType;

        return $this;
    }

}