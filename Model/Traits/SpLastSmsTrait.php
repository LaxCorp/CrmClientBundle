<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SpLastSmsTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("splastsms")
     * @Serializer\Type("string")
     */
    private $spLastSms;

    /**
     * @inheritdoc
     */
    public function getSpLastSms(): ?string
    {
        return $this->spLastSms;
    }

    /**
     * @inheritdoc
     */
    public function setSpLastSms(?string $spLastSms)
    {
        $this->spLastSms = $spLastSms;

        return $this;
    }

}