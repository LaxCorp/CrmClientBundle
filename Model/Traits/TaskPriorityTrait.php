<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TaskPriorityTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("taskpriority")
     * @Serializer\Type("string")
     */
    private $taskPriority;

    /**
     * @inheritdoc
     */
    public function getTaskPriority()
    {
        return $this->taskPriority;
    }

    /**
     * @inheritdoc
     */
    public function setTaskPriority(?string $taskPriority)
    {
        $this->taskPriority = $taskPriority;

        return $this;
    }

}