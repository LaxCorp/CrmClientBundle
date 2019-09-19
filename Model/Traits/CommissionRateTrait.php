<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CommissionRateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("commissionrate")
     * @Serializer\Type("string")
     */
    private $commissionRate;

    /**
     * @inheritdoc
     */
    public function getCommissionRate(): ?string
    {
        return $this->commissionRate;
    }

    /**
     * @inheritdoc
     */
    public function setCommissionRate(?string $commissionRate)
    {
        $this->commissionRate = $commissionRate;

        return $this;
    }

}