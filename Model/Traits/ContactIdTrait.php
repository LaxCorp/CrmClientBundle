<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ContactIdTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("contact_id")
     * @Serializer\Type("string")
     */
    private $contactId;

    /**
     * @inheritdoc
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @inheritdoc
     */
    public function setContactId(?string $contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

}