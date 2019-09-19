<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SpCompanyTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("spcompany")
     * @Serializer\Type("string")
     */
    private $spCompany;

    /**
     * @inheritdoc
     */
    public function getSpCompany(): ?string
    {
        return $this->spCompany;
    }

    /**
     * @inheritdoc
     */
    public function setSpCompany(?string $spCompany)
    {
        $this->spCompany = $spCompany;

        return $this;
    }

}