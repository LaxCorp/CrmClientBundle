<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CurrencyIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("currency_id")
     * @Serializer\Type("string")
     */
    private $currencyId;

    /**
     * @inheritdoc
     */
    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    /**
     * @inheritdoc
     */
    public function setCurrencyId(?string $currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

}