<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait LabelFieldsTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("labelFields")
     * @Serializer\Type("string")
     */
    private $labelFields;

    /**
     * @inheritdoc
     */
    public function getLabelFields(): ?string
    {
        return $this->labelFields;
    }

    /**
     * @inheritdoc
     */
    public function setLabelFields(?string $labelFields)
    {
        $this->labelFields = $labelFields;

        return $this;
    }

}