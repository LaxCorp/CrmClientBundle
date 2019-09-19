<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait EmailOptOutTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("emailoptout")
     * @Serializer\Type("string")
     */
    private $emailOptOut;

    /**
     * @inheritdoc
     */
    public function getEmailOptOut(): ?string
    {
        return $this->emailOptOut;
    }

    /**
     * @inheritdoc
     */
    public function setEmailOptOut(?string $emailOptOut)
    {
        $this->emailOptOut = $emailOptOut;

        return $this;
    }

}