<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait NullableTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("nullable")
     * @Serializer\Type("bool")
     */
    private $nullable;

    /**
     * @inheritdoc
     */
    public function getNullable(): bool
    {
        return $this->nullable;
    }

    /**
     * @inheritdoc
     */
    public function setNullable(bool $nullable)
    {
        $this->nullable = $nullable;

        return $this;
    }

}