<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TxtAdjustmentTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("txtAdjustment")
     * @Serializer\Type("string")
     */
    private $txtAdjustment;

    /**
     * @inheritdoc
     */
    public function getTxtAdjustment(): ?string
    {
        return $this->txtAdjustment;
    }

    /**
     * @inheritdoc
     */
    public function setTxtAdjustment(?string $txtAdjustment)
    {
        $this->txtAdjustment = $txtAdjustment;

        return $this;
    }

}