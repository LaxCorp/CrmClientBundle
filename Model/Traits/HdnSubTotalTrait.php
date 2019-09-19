<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait HdnSubTotalTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("hdnSubTotal")
     * @Serializer\Type("string")
     */
    private $hdnSubTotal;

    /**
     * @inheritdoc
     */
    public function getHdnSubTotal(): ?string
    {
        return $this->hdnSubTotal;
    }

    /**
     * @inheritdoc
     */
    public function setHdnSubTotal(?string $hdnSubTotal)
    {
        $this->hdnSubTotal = $hdnSubTotal;

        return $this;
    }

}