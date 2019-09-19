<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait RefersToTrait
{

    /**
     * @var array|null
     *
     * @Serializer\SerializedName("refersTo")
     * @Serializer\Type("array")
     */
    private $refersTo;

    /**
     * @inheritdoc
     */
    public function getRefersTo(): ?array
    {
        return $this->refersTo;
    }

    /**
     * @inheritdoc
     */
    public function setRefersTo(?array $refersTo)
    {
        $this->refersTo = $refersTo;

        return $this;
    }

}