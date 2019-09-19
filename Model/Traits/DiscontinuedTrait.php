<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DiscontinuedTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("discontinued")
     * @Serializer\Type("string")
     */
    private $discontinued;

    /**
     * @inheritdoc
     */
    public function getDiscontinued(): ?string
    {
        return $this->discontinued;
    }

    /**
     * @inheritdoc
     */
    public function setDiscontinued(?string $discontinued)
    {
        $this->discontinued = $discontinued;

        return $this;
    }

}