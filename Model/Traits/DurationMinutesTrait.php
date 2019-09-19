<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DurationMinutesTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("duration_minutes")
     * @Serializer\Type("string")
     */
    private $durationMinutes;

    /**
     * @inheritdoc
     */
    public function getDurationMinutes()
    {
        return $this->durationMinutes;
    }

    /**
     * @inheritdoc
     */
    public function setDurationMinutes(?string $durationMinutes)
    {
        $this->durationMinutes = $durationMinutes;

        return $this;
    }

}