<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait OneSIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("one_s_id")
     * @Serializer\Type("string")
     */
    private $oneSId;

    /**
     * @inheritdoc
     */
    public function getOneSId(): ?string
    {
        return $this->oneSId;
    }

    /**
     * @inheritdoc
     */
    public function setOneSId(?string $oneSId)
    {
        $this->oneSId = $oneSId;

        return $this;
    }

}