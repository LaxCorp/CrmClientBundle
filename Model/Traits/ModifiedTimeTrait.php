<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Util\DateUtil;

/**
 * @inheritdoc
 */
trait ModifiedTimeTrait
{

    /**
     * @var \DateTime|null
     *
     * @Serializer\SerializedName("modifiedtime")
     * @Serializer\Type(DateUtil::JMS_DATE_TIME_TYPE)
     */
    private $modifiedTime;

    /**
     * @inheritdoc
     */
    public function getModifiedTime(): ?\DateTime
    {
        return $this->modifiedTime;
    }

    /**
     * @inheritdoc
     */
    public function setModifiedTime(?\DateTime $modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;

        return $this;
    }

}