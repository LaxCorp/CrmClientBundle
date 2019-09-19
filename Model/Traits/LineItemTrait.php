<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Model\LineItem;

/**
 * @inheritdoc
 */
trait LineItemTrait
{

    /**
     * @var LineItem[]|array
     *
     * @Serializer\SerializedName("LineItems")
     * @Serializer\Type("array<LaxCorp\CrmClientBundle\Model\LineItem>")
     */
    private $lineItem = [];

    /**
     * @inheritdoc
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @inheritdoc
     */
    public function setLineItem(array $lineItems)
    {
        $this->lineItem = $lineItems;
    }

    /**
     * @inheritdoc
     */
    public function addLineItem(LineItem $lineItems)
    {
        $this->lineItem[] = $lineItems;

        return $this;
    }

}
