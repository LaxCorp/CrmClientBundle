<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TimeEndTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("time_end")
     * @Serializer\Type("string")
     */
    private $timeEnd;

    /**
     * @inheritdoc
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @inheritdoc
     */
    public function setTimeEnd(?string $timeEnd)
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

}