<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait EventStatusTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("eventstatus")
     * @Serializer\Type("string")
     */
    private $eventStatus;

    /**
     * @inheritdoc
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * @inheritdoc
     */
    public function setEventStatus(?string $eventStatus)
    {
        $this->eventStatus = $eventStatus;

        return $this;
    }

}