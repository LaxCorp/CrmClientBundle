<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait HdnGrandTotalTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("hdnGrandTotal")
     * @Serializer\Type("string")
     */
    private $hdnGrandTotal;

    /**
     * @inheritdoc
     */
    public function getHdnGrandTotal(): ?string
    {
        return $this->hdnGrandTotal;
    }

    /**
     * @inheritdoc
     */
    public function setHdnGrandTotal(?string $hdnGrandTotal)
    {
        $this->hdnGrandTotal = $hdnGrandTotal;

        return $this;
    }

}