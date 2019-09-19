<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ConversionRateTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("conversion_rate")
     * @Serializer\Type("string")
     */
    private $conversionRate;

    /**
     * @inheritdoc
     */
    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    /**
     * @inheritdoc
     */
    public function setConversionRate(?string $conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

}