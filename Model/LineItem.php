<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class LineItem extends CrmModel
{
    const MODULE = 'LineItem';

    use Traits\ParentIdTrait;
    use Traits\ProductIdTrait;
    use Traits\SequenceNoTrait;
    use Traits\QuantityTrait;
    use Traits\ListPriceTrait;
    use Traits\DiscountPercentTrait;
    use Traits\DiscountAmountTrait;
    use Traits\CommentTrait;
    use Traits\DescriptionTrait;
    use Traits\IncrementOnDelTrait;
    use Traits\IdTrait;
    use Traits\Tax1Trait;
    use Traits\Tax2Trait;
    use Traits\Tax3Trait;
    use Traits\ImageTrait;
    use Traits\PurchaseCostTrait;
    use Traits\MarginTrait;

}