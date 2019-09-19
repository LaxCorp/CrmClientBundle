<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait EditableTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("editable")
     * @Serializer\Type("bool")
     */
    private $editable;

    /**
     * @inheritdoc
     */
    public function getEditable(): bool
    {
        return $this->editable;
    }

    /**
     * @inheritdoc
     */
    public function setEditable(bool $editable)
    {
        $this->editable = $editable;

        return $this;
    }

}