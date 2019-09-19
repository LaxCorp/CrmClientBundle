<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillCountryTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("bill_country")
     * @Serializer\Type("string")
     */
    private $billCountry;

    /**
     * @inheritdoc
     */
    public function getBillCountry(): ?string
    {
        return $this->billCountry;
    }

    /**
     * @inheritdoc
     */
    public function setBillCountry(?string $billCountry)
    {
        $this->billCountry = $billCountry;

        return $this;
    }

}