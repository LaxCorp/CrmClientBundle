<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TickerSymbolTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("tickersymbol")
     * @Serializer\Type("string")
     */
    private $tickerSymbol;

    /**
     * @inheritdoc
     */
    public function getTickerSymbol(): ?string
    {
        return $this->tickerSymbol;
    }

    /**
     * @inheritdoc
     */
    public function setTickerSymbol(?string $tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;

        return $this;
    }

}