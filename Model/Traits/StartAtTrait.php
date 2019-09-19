<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Util\DateUtil;

/**
 * @inheritdoc
 */
trait StartAtTrait
{

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date_start")
     */
    private $_dateStart;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("time_start")
     */
    private $_timeStart;

    /**
     * @var \DateTime|null
     * @Serializer\Inline
     */
    private $startAt;

    /**
     * @inheritdoc
     */
    public function getStartAt(): ?\DateTime
    {
        return DateUtil::joinDate($this->_dateStart, $this->_timeStart);
    }

    /**
     * @inheritdoc
     */
    public function setStartAt(?\DateTime $startAt)
    {
        $result = DateUtil::splitDate($startAt);

        $this->_dateStart = ($result) ? $result['date'] : null;
        $this->_timeStart = ($result) ? $result['time'] : null;

        $this->startAt = $startAt;

        return $this;
    }


    /**
     * @Serializer\PostDeserialize
     */
    public function postDeserializeActions()
    {
        $this->startAt = $this->getStartAt();
    }

}