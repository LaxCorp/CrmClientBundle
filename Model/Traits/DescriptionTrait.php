<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DescriptionTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @inheritdoc
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

}