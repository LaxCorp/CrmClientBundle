<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Model\Field;

/**
 * @inheritdoc
 */
trait FieldTrait
{

    /**
     * @var Field
     *
     * @Serializer\SerializedName("fields")
     * @Serializer\Type("array<LaxCorp\CrmClientBundle\Model\Field>")
     */
    private $field;

    /**
     * @return Field
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param Field $field
     *
     * @return FieldTrait
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

}
