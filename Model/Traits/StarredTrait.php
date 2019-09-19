<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait StarredTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("starred")
     * @Serializer\Type("string")
     */
    private $starred;

    /**
     * @inheritdoc
     */
    public function getStarred()
    {
        return $this->starred;
    }

    /**
     * @inheritdoc
     */
    public function setStarred(?string $starred)
    {
        $this->starred = $starred;

        return $this;
    }

}