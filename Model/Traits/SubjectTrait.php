<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SubjectTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("subject")
     * @Serializer\Type("string")
     */
    private $subject;

    /**
     * @inheritdoc
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @inheritdoc
     */
    public function setSubject(?string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

}