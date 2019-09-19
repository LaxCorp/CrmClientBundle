<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DurationHoursTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("duration_hours")
     * @Serializer\Type("string")
     */
    private $durationHours;

    /**
     * @inheritdoc
     */
    public function getDurationHours()
    {
        return $this->durationHours;
    }

    /**
     * @inheritdoc
     */
    public function setDurationHours(?string $durationHours)
    {
        $this->durationHours = $durationHours;

        return $this;
    }

}