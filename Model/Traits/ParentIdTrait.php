<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ParentIdTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("parent_id")
     * @Serializer\Type("string")
     */
    private $parentId;

    /**
     * @inheritdoc
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @inheritdoc
     */
    public function setParentId(?string $parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

}