<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TwUrlTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("tw_url")
     * @Serializer\Type("string")
     */
    private $twUrl;

    /**
     * @inheritdoc
     */
    public function getTwUrl(): ?string
    {
        return $this->twUrl;
    }

    /**
     * @inheritdoc
     */
    public function setTwUrl(?string $twUrl)
    {
        $this->twUrl = $twUrl;

        return $this;
    }

}