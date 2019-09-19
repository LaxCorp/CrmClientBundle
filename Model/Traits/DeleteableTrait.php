<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DeleteableTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("deleteable")
     * @Serializer\Type("bool")
     */
    private $deleteable;

    /**
     * @inheritdoc
     */
    public function getDeleteable(): bool
    {
        return $this->deleteable;
    }

    /**
     * @inheritdoc
     */
    public function setDeleteable(bool $deleteable)
    {
        $this->deleteable = $deleteable;

        return $this;
    }

}