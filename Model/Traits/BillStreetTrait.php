<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillStreetTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("bill_street")
     * @Serializer\Type("string")
     */
    private $billStreet;

    /**
     * @inheritdoc
     */
    public function getBillStreet(): ?string
    {
        return $this->billStreet;
    }

    /**
     * @inheritdoc
     */
    public function setBillStreet(?string $billStreet)
    {
        $this->billStreet = $billStreet;

        return $this;
    }

}