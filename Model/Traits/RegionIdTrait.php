<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait RegionIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("region_id")
     * @Serializer\Type("string")
     */
    private $regionId;

    /**
     * @inheritdoc
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    /**
     * @inheritdoc
     */
    public function setRegionId(?string $regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

}