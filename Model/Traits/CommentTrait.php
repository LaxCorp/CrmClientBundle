<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CommentTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("comment")
     * @Serializer\Type("string")
     */
    private $comment;

    /**
     * @inheritdoc
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @inheritdoc
     */
    public function setComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

}