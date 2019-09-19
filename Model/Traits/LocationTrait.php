<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait LocationTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("location")
     * @Serializer\Type("string")
     */
    private $location;

    /**
     * @inheritdoc
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @inheritdoc
     */
    public function setLocation(?string $location)
    {
        $this->location = $location;

        return $this;
    }

}