<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TaxClassTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("taxclass")
     * @Serializer\Type("string")
     */
    private $taxClass;

    /**
     * @inheritdoc
     */
    public function getTaxClass(): ?string
    {
        return $this->taxClass;
    }

    /**
     * @inheritdoc
     */
    public function setTaxClass(?string $taxClass)
    {
        $this->taxClass = $taxClass;

        return $this;
    }

}