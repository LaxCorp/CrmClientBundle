<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AccountTypeTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("accounttype")
     * @Serializer\Type("string")
     */
    private $accountType;

    /**
     * @inheritdoc
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @inheritdoc
     */
    public function setAccountType(?string $accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

}