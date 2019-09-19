<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AccountIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("account_id")
     * @Serializer\Type("string")
     */
    private $accountId;

    /**
     * @inheritdoc
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @inheritdoc
     */
    public function setAccountId(?string $accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

}