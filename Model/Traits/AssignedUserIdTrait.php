<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AssignedUserIdTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("assigned_user_id")
     * @Serializer\Type("string")
     */
    private $assignedUserId;

    /**
     * @inheritdoc
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * @inheritdoc
     */
    public function setAssignedUserId(?string $assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

}