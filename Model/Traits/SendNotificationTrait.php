<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SendNotificationTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("sendnotification")
     * @Serializer\Type("string")
     */
    private $sendNotification;

    /**
     * @inheritdoc
     */
    public function getSendNotification()
    {
        return $this->sendNotification;
    }

    /**
     * @inheritdoc
     */
    public function setSendNotification(?string $sendNotification)
    {
        $this->sendNotification = $sendNotification;

        return $this;
    }

}