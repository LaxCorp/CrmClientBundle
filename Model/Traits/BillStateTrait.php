<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillStateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("bill_state")
     * @Serializer\Type("string")
     */
    private $billState;

    /**
     * @inheritdoc
     */
    public function getBillState(): ?string
    {
        return $this->billState;
    }

    /**
     * @inheritdoc
     */
    public function setBillState(?string $billState)
    {
        $this->billState = $billState;

        return $this;
    }

}