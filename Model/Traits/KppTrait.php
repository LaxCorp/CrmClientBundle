<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait KppTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("kpp")
     * @Serializer\Type("string")
     */
    private $kpp;

    /**
     * @inheritdoc
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * @inheritdoc
     */
    public function setKpp(?string $kpp)
    {
        $this->kpp = $kpp;

        return $this;
    }

}