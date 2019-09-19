<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait UpdateableTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("updateable")
     * @Serializer\Type("bool")
     */
    private $updateable;

    /**
     * @inheritdoc
     */
    public function getUpdateable(): bool
    {
        return $this->updateable;
    }

    /**
     * @inheritdoc
     */
    public function setUpdateable(bool $updateable)
    {
        $this->updateable = $updateable;

        return $this;
    }

}