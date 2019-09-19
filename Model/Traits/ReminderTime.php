<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ReminderTime
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("reminder_time")
     * @Serializer\Type("string")
     */
    private $reminderTime;

    /**
     * @inheritdoc
     */
    public function getReminderTime()
    {
        return $this->reminderTime;
    }

    /**
     * @inheritdoc
     */
    public function setReminderTime(?string $reminderTime)
    {
        $this->reminderTime = $reminderTime;

        return $this;
    }

}