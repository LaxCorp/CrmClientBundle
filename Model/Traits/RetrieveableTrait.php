<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait RetrieveableTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("retrieveable")
     * @Serializer\Type("bool")
     */
    private $retrieveable;

    /**
     * @inheritdoc
     */
    public function getRetrieveable(): bool
    {
        return $this->retrieveable;
    }

    /**
     * @inheritdoc
     */
    public function setRetrieveable(bool $retrieveable)
    {
        $this->retrieveable = $retrieveable;

        return $this;
    }

}