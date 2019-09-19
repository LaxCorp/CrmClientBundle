<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DefaultTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("default")
     * @Serializer\Type("string")
     */
    private $default;

    /**
     * @inheritdoc
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * @inheritdoc
     */
    public function setDefault(?string $default)
    {
        $this->default = $default;

        return $this;
    }

}