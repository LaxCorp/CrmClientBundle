<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SalesEndDateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("sales_end_date")
     * @Serializer\Type("string")
     */
    private $salesEndDate;

    /**
     * @inheritdoc
     */
    public function getSalesEndDate(): ?string
    {
        return $this->salesEndDate;
    }

    /**
     * @inheritdoc
     */
    public function setSalesEndDate(?string $salesEndDate)
    {
        $this->salesEndDate = $salesEndDate;

        return $this;
    }

}