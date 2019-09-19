<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SalesStartDateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("sales_start_date")
     * @Serializer\Type("string")
     */
    private $salesStartDate;

    /**
     * @inheritdoc
     */
    public function getSalesStartDate(): ?string
    {
        return $this->salesStartDate;
    }

    /**
     * @inheritdoc
     */
    public function setSalesStartDate(?string $salesStartDate)
    {
        $this->salesStartDate = $salesStartDate;

        return $this;
    }

}