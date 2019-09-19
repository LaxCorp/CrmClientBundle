<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait WebsiteTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("website")
     * @Serializer\Type("string")
     */
    private $website;

    /**
     * @inheritdoc
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @inheritdoc
     */
    public function setWebsite(?string $website)
    {
        $this->website = $website;

        return $this;
    }

}