<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IsEntityTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("isEntity")
     * @Serializer\Type("bool")
     */
    private $isEntity;

    /**
     * @inheritdoc
     */
    public function getIsEntity(): bool
    {
        return $this->isEntity;
    }

    /**
     * @inheritdoc
     */
    public function setIsEntity(bool $isEntity)
    {
        $this->isEntity = $isEntity;

        return $this;
    }

}