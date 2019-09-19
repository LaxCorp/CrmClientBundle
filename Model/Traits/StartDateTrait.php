<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait StartDateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("start_date")
     * @Serializer\Type("string")
     */
    private $startDate;

    /**
     * @inheritdoc
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @inheritdoc
     */
    public function setStartDate(?string $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

}