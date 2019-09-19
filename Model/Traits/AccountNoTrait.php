<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AccountNoTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("account_no")
     * @Serializer\Type("string")
     */
    private $accountNo;

    /**
     * @inheritdoc
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }

    /**
     * @inheritdoc
     */
    public function setAccountNo(?string $accountNo)
    {
        $this->accountNo = $accountNo;

        return $this;
    }

}