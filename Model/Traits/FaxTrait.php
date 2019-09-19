<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait FaxTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("fax")
     * @Serializer\Type("string")
     */
    private $fax;

    /**
     * @inheritdoc
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @inheritdoc
     */
    public function setFax(?string $fax)
    {
        $this->fax = $fax;

        return $this;
    }

}