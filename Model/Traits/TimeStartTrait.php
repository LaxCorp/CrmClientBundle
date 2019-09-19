<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TimeStartTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("time_start")
     * @Serializer\Type("string")
     */
    private $timeStart;

    /**
     * @inheritdoc
     */
    public function getTimeStart(): ?string
    {
        return $this->timeStart;
    }

    /**
     * @inheritdoc
     */
    public function setTimeStart(?string $timeStart)
    {
        $this->timeStart = $timeStart;

        return $this;
    }

}