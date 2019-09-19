<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IdPrefixTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("idPrefix")
     * @Serializer\Type("string")
     */
    private $idPrefix;

    /**
     * @inheritdoc
     */
    public function getIdPrefix(): string
    {
        return $this->idPrefix;
    }

    /**
     * @inheritdoc
     */
    public function setIdPrefix(string $idPrefix)
    {
        $this->idPrefix = $idPrefix;

        return $this;
    }

}