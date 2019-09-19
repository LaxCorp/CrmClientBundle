<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IdTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("id")
     * @Serializer\Type("string")
     */
    private $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return IdTrait
     */
    public function setId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

}