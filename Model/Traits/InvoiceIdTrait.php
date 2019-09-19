<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait InvoiceIdTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("invoice_id")
     * @Serializer\Type("string")
     */
    private $invoiceId;

    /**
     * @inheritdoc
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * @inheritdoc
     */
    public function setInvoiceId(?string $invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

}