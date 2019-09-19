<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SourceTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("source")
     * @Serializer\Type("string")
     */
    private $source;

    /**
     * @inheritdoc
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @inheritdoc
     */
    public function setSource(?string $source)
    {
        $this->source = $source;

        return $this;
    }

}