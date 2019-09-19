<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillPoboxTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("bill_pobox")
     * @Serializer\Type("string")
     */
    private $billPobox;

    /**
     * @inheritdoc
     */
    public function getBillPobox(): ?string
    {
        return $this->billPobox;
    }

    /**
     * @inheritdoc
     */
    public function setBillPobox(?string $billPobox)
    {
        $this->billPobox = $billPobox;

        return $this;
    }

}