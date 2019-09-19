<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ModifiedByTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("modifiedby")
     * @Serializer\Type("string")
     */
    private $modifiedBy;

    /**
     * @inheritdoc
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @inheritdoc
     */
    public function setModifiedBy(string $modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

}