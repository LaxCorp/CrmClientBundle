<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait PreTaxTotalTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("pre_tax_total")
     * @Serializer\Type("string")
     */
    private $preTaxTotal;

    /**
     * @inheritdoc
     */
    public function getPreTaxTotal(): ?string
    {
        return $this->preTaxTotal;
    }

    /**
     * @inheritdoc
     */
    public function setPreTaxTotal(?string $preTaxTotal)
    {
        $this->preTaxTotal = $preTaxTotal;

        return $this;
    }

}