<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait HdnSHAmountTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("hdnS_H_Amount")
     * @Serializer\Type("string")
     */
    private $hdnSHAmount;

    /**
     * @inheritdoc
     */
    public function getHdnSHAmount(): ?string
    {
        return $this->hdnSHAmount;
    }

    /**
     * @inheritdoc
     */
    public function setHdnSHAmount(?string $hdnSHAmount)
    {
        $this->hdnSHAmount = $hdnSHAmount;

        return $this;
    }

}