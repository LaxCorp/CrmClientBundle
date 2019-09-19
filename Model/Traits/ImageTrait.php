<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ImageTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("image")
     * @Serializer\Type("string")
     */
    private $image;

    /**
     * @inheritdoc
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @inheritdoc
     */
    public function setImage(?string $image)
    {
        $this->image = $image;

        return $this;
    }

}