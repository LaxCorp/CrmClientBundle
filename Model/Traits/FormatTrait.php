<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait FormatTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("format")
     * @Serializer\Type("string")
     */
    private $format;

    /**
     * @inheritdoc
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @inheritdoc
     */
    public function setFormat(?string $format)
    {
        $this->format = $format;

        return $this;
    }

}