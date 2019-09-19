<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DefaultValueTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("defaultValue")
     * @Serializer\Type("string")
     */
    private $defaultValue;

    /**
     * @inheritdoc
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    /**
     * @inheritdoc
     */
    public function setDefaultValue(?string $defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

}