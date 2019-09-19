<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Model\PicklistValue;

/**
 * @inheritdoc
 */
trait PicklistValueTrait
{

    /**
     * @var PicklistValue
     *
     * @Serializer\SerializedName("picklistValues")
     * @Serializer\Type("array<LaxCorp\CrmClientBundle\Model\PicklistValue>")
     */
    private $picklistValue;

    /**
     * @return PicklistValue
     */
    public function getPicklistValue()
    {
        return $this->picklistValue;
    }

    /**
     * @param PicklistValue $picklistValue
     *
     * @return PicklistValueTrait
     */
    public function setPicklistValue($picklistValue)
    {
        $this->picklistValue = $picklistValue;

        return $this;
    }

}