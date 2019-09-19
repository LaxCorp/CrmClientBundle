<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ValueTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("value")
     * @Serializer\Type("string")
     */
    private $value;

    /**
     * @inheritdoc
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @inheritdoc
     */
    public function setValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }

}