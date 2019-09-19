<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait InnTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("inn")
     * @Serializer\Type("string")
     */
    private $inn;

    /**
     * @inheritdoc
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @inheritdoc
     */
    public function setInn(?string $inn)
    {
        $this->inn = $inn;

        return $this;
    }

}