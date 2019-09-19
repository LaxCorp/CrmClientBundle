<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TagsTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("tags")
     * @Serializer\Type("string")
     */
    private $tags;

    /**
     * @inheritdoc
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @inheritdoc
     */
    public function setTags(?string $tags)
    {
        $this->tags = $tags;

        return $this;
    }

}