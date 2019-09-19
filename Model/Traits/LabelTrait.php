<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait LabelTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("label")
     * @Serializer\Type("string")
     */
    private $label;

    /**
     * @inheritdoc
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @inheritdoc
     */
    public function setLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }

}