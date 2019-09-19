<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CreateableTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("createable")
     * @Serializer\Type("bool")
     */
    private $createable;

    /**
     * @inheritdoc
     */
    public function getCreateable(): bool
    {
        return $this->createable;
    }

    /**
     * @inheritdoc
     */
    public function setCreateable(bool $createable)
    {
        $this->createable = $createable;

        return $this;
    }

}