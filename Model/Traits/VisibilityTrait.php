<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait VisibilityTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("visibility")
     * @Serializer\Type("string")
     */
    private $visibility;

    /**
     * @inheritdoc
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @inheritdoc
     */
    public function setVisibility(?string $visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

}