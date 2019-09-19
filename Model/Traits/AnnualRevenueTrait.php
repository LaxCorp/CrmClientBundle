<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AnnualRevenueTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("annual_revenue")
     * @Serializer\Type("string")
     */
    private $annualRevenue;

    /**
     * @inheritdoc
     */
    public function getAnnualRevenue(): ?string
    {
        return $this->annualRevenue;
    }

    /**
     * @inheritdoc
     */
    public function setAnnualRevenue(?string $annualRevenue)
    {
        $this->annualRevenue = $annualRevenue;

        return $this;
    }

}