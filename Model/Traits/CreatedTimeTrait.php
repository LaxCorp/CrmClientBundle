<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Util\DateUtil;

/**
 * @inheritdoc
 */
trait CreatedTimeTrait
{

    /**
     * @var \DateTime|null
     *
     * @Serializer\SerializedName("createdtime")
     * @Serializer\Type(DateUtil::JMS_DATE_TIME_TYPE)
     */
    private $createdTime;

    /**
     * @inheritdoc
     */
    public function getCreatedTime(): ?\DateTime
    {
        return $this->createdTime;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedTime(?\DateTime $createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

}