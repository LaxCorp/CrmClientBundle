<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait MandatoryTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("mandatory")
     * @Serializer\Type("bool")
     */
    private $mandatory;

    /**
     * @inheritdoc
     */
    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    /**
     * @inheritdoc
     */
    public function setMandatory(bool $mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

}