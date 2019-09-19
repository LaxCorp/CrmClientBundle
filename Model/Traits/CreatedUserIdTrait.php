<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CreatedUserIdTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("created_user_id")
     * @Serializer\Type("string")
     */
    private $createdUserId;

    /**
     * @inheritdoc
     */
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedUserId(?string $createdUserId)
    {
        $this->createdUserId = $createdUserId;

        return $this;
    }

}