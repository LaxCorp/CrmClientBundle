<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait NoTimeTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("notime")
     * @Serializer\Type("string")
     */
    private $noTime;

    /**
     * @inheritdoc
     */
    public function getNoTime()
    {
        return $this->noTime;
    }

    /**
     * @inheritdoc
     */
    public function setNoTime(?string $noTime)
    {
        $this->noTime = $noTime;

        return $this;
    }

}