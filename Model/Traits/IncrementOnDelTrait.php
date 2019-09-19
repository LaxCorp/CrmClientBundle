<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IncrementOnDelTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("incrementondel")
     * @Serializer\Type("string")
     */
    private $incrementOnDel;

    /**
     * @inheritdoc
     */
    public function getIncrementOnDel(): ?string
    {
        return $this->incrementOnDel;
    }

    /**
     * @inheritdoc
     */
    public function setIncrementOnDel(?string $incrementOnDel)
    {
        $this->incrementOnDel = $incrementOnDel;

        return $this;
    }

}