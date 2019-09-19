<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IndustryTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("industry")
     * @Serializer\Type("string")
     */
    private $industry;

    /**
     * @inheritdoc
     */
    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    /**
     * @inheritdoc
     */
    public function setIndustry(?string $industry)
    {
        $this->industry = $industry;

        return $this;
    }

}