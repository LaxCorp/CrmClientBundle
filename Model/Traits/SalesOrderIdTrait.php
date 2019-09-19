<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SalesOrderIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("salesorder_id")
     * @Serializer\Type("string")
     */
    private $salesOrderId;

    /**
     * @inheritdoc
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }

    /**
     * @inheritdoc
     */
    public function setSalesOrderId(?string $salesOrderId)
    {
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

}