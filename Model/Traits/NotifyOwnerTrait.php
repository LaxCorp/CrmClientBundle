<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait NotifyOwnerTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("notify_owner")
     * @Serializer\Type("string")
     */
    private $notifyOwner;

    /**
     * @inheritdoc
     */
    public function getNotifyOwner(): ?string
    {
        return $this->notifyOwner;
    }

    /**
     * @inheritdoc
     */
    public function setNotifyOwner(?string $notifyOwner)
    {
        $this->notifyOwner = $notifyOwner;

        return $this;
    }

}