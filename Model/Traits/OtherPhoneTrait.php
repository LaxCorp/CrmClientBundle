<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait OtherPhoneTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("otherphone")
     * @Serializer\Type("string")
     */
    private $otherPhone;

    /**
     * @inheritdoc
     */
    public function getOtherPhone(): ?string
    {
        return $this->otherPhone;
    }

    /**
     * @inheritdoc
     */
    public function setOtherPhone(?string $otherPhone)
    {
        $this->otherPhone = $otherPhone;

        return $this;
    }

}