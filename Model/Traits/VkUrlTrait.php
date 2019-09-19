<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait VkUrlTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("vk_url")
     * @Serializer\Type("string")
     */
    private $vkUrl;

    /**
     * @inheritdoc
     */
    public function getVkUrl(): ?string
    {
        return $this->vkUrl;
    }

    /**
     * @inheritdoc
     */
    public function setVkUrl(?string $vkUrl)
    {
        $this->vkUrl = $vkUrl;

        return $this;
    }

}