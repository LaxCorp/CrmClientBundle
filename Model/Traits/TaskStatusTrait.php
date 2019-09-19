<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TaskStatusTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("taskstatus")
     * @Serializer\Type("string")
     */
    private $taskStatus;

    /**
     * @inheritdoc
     */
    public function getTaskStatus()
    {
        return $this->taskStatus;
    }

    /**
     * @inheritdoc
     */
    public function setTaskStatus(?string $taskStatus)
    {
        $this->taskStatus = $taskStatus;

        return $this;
    }

}