<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait MarginTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("margin")
     * @Serializer\Type("string")
     */
    private $margin;

    /**
     * @inheritdoc
     */
    public function getMargin(): ?string
    {
        return $this->margin;
    }

    /**
     * @inheritdoc
     */
    public function setMargin(?string $margin)
    {
        $this->margin = $margin;

        return $this;
    }

}