<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IsuniqueTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("isunique")
     * @Serializer\Type("bool")
     */
    private $isunique;

    /**
     * @inheritdoc
     */
    public function getIsunique(): bool
    {
        return $this->isunique;
    }

    /**
     * @inheritdoc
     */
    public function setIsunique(bool $isunique)
    {
        $this->isunique = $isunique;

        return $this;
    }

}