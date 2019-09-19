<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SicCodeTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("siccode")
     * @Serializer\Type("string")
     */
    private $sicCode;

    /**
     * @inheritdoc
     */
    public function getSicCode(): ?string
    {
        return $this->sicCode;
    }

    /**
     * @inheritdoc
     */
    public function setSicCode(?string $sicCode)
    {
        $this->sicCode = $sicCode;

        return $this;
    }

}