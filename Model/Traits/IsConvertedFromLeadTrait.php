<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IsConvertedFromLeadTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("isconvertedfromlead")
     * @Serializer\Type("string")
     */
    private $isConvertedFromLead;

    /**
     * @inheritdoc
     */
    public function getIsConvertedFromLead(): ?string
    {
        return $this->isConvertedFromLead;
    }

    /**
     * @inheritdoc
     */
    public function setIsConvertedFromLead(?string $isConvertedFromLead)
    {
        $this->isConvertedFromLead = $isConvertedFromLead;

        return $this;
    }

}