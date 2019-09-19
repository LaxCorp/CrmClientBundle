<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait HdnTaxTypeTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("hdnTaxType")
     * @Serializer\Type("string")
     */
    private $hdnTaxType;

    /**
     * @inheritdoc
     */
    public function getHdnTaxType(): ?string
    {
        return $this->hdnTaxType;
    }

    /**
     * @inheritdoc
     */
    public function setHdnTaxType(?string $hdnTaxType)
    {
        $this->hdnTaxType = $hdnTaxType;

        return $this;
    }

}