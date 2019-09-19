<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait PhoneTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("phone")
     * @Serializer\Type("string")
     */
    private $phone;

    /**
     * @inheritdoc
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @inheritdoc
     */
    public function setPhone(?string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

}