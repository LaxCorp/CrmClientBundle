<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait RecurringTypeTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("recurringtype")
     * @Serializer\Type("string")
     */
    private $recurringType;

    /**
     * @inheritdoc
     */
    public function getRecurringType()
    {
        return $this->recurringType;
    }

    /**
     * @inheritdoc
     */
    public function setRecurringType(?string $recurringType)
    {
        $this->recurringType = $recurringType;

        return $this;
    }

}