<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait Email2Trait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("email2")
     * @Serializer\Type("string")
     */
    private $email2;

    /**
     * @inheritdoc
     */
    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    /**
     * @inheritdoc
     */
    public function setEmail2(?string $email2)
    {
        $this->email2 = $email2;

        return $this;
    }

}