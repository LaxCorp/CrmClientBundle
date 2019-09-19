<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Util\DateUtil;

/**
 * @inheritdoc
 */
trait DueDateTrait
{

    /**
     * @var \DateTime|null
     *
     * @Serializer\SerializedName("due_date")
     * @Serializer\Type(DateUtil::JMS_DATE_TYPE)
     */
    private $dueDate;

    /**
     * @inheritdoc
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * @inheritdoc
     */
    public function setDueDate(?\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

}