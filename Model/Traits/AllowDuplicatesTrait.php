<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AllowDuplicatesTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("allowDuplicates")
     * @Serializer\Type("bool")
     */
    private $allowDuplicates;

    /**
     * @inheritdoc
     */
    public function getAllowDuplicates(): bool
    {
        return $this->allowDuplicates;
    }

    /**
     * @inheritdoc
     */
    public function setAllowDuplicates(bool $allowDuplicates)
    {
        $this->allowDuplicates = $allowDuplicates;

        return $this;
    }

}