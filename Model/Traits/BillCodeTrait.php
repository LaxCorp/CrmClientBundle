<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillCodeTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("bill_code")
     * @Serializer\Type("string")
     */
    private $billCode;

    /**
     * @inheritdoc
     */
    public function getBillCode(): ?string
    {
        return $this->billCode;
    }

    /**
     * @inheritdoc
     */
    public function setBillCode(?string $billCode)
    {
        $this->billCode = $billCode;

        return $this;
    }

}