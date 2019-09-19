<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SequenceNoTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("sequence_no")
     * @Serializer\Type("string")
     */
    private $sequenceNo;

    /**
     * @inheritdoc
     */
    public function getSequenceNo(): ?string
    {
        return $this->sequenceNo;
    }

    /**
     * @inheritdoc
     */
    public function setSequenceNo(?string $sequenceNo)
    {
        $this->sequenceNo = $sequenceNo;

        return $this;
    }

}