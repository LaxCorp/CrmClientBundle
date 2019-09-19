<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CrmClientBundle\Model\Type;

/**
 * @inheritdoc
 */
trait TypeTrait
{

    /**
     * @var Type
     *
     * @Serializer\SerializedName("type")
     * @Serializer\Type(Type::class)
     */
    private $type;

    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Type $type
     *
     * @return TypeTrait
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

}
