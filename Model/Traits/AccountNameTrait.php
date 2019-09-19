<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AccountNameTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("accountname")
     * @Serializer\Type("string")
     */
    private $accountName;

    /**
     * @inheritdoc
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @inheritdoc
     */
    public function setAccountName(string $accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

}