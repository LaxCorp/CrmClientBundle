<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DateStartTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("date_start")
     * @Serializer\Type("string")
     */
    private $dateStart;

    /**
     * @inheritdoc
     */
    public function getDateStart(): ?string
    {
        return $this->dateStart;
    }

    /**
     * @inheritdoc
     */
    public function setDateStart(?string $dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

}