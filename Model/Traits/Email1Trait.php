<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait Email1Trait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("email1")
     * @Serializer\Type("string")
     */
    private $email1;

    /**
     * @inheritdoc
     */
    public function getEmail1(): ?string
    {
        return $this->email1;
    }

    /**
     * @inheritdoc
     */
    public function setEmail1(?string $email1)
    {
        $this->email1 = $email1;

        return $this;
    }

}