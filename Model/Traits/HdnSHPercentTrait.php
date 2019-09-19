<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait HdnSHPercentTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("hdnS_H_Percent")
     * @Serializer\Type("string")
     */
    private $hdnSHPercent;

    /**
     * @inheritdoc
     */
    public function getHdnSHPercent(): ?string
    {
        return $this->hdnSHPercent;
    }

    /**
     * @inheritdoc
     */
    public function setHdnSHPercent(?string $hdnSHPercent)
    {
        $this->hdnSHPercent = $hdnSHPercent;

        return $this;
    }

}