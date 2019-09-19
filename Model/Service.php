<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Service extends CrmModel
{

    const MODULE = 'Services';

    use Traits\ServiceNameTrait;
    use Traits\ServiceNoTrait;
    use Traits\DiscontinuedTrait;
    use Traits\SalesStartDateTrait;
    use Traits\SalesEndDateTrait;
    use Traits\StartDateTrait;
    use Traits\ExpiryDateTrait;
    use Traits\WebsiteTrait;
    use Traits\CreatedTimeTrait;
    use Traits\ModifiedTimeTrait;
    use Traits\ModifiedByTrait;
    use Traits\ServiceUsageUnitTrait;
    use Traits\QtyPerUnitTrait;
    use Traits\AssignedUserIdTrait;
    use Traits\ServiceCategoryTrait;
    use Traits\SourceTrait;
    use Traits\TagsTrait;
    use Traits\UnitCodeTrait;
    use Traits\CreatedUserIdTrait;
    use Traits\UnitPriceTrait;
    use Traits\TaxClassTrait;
    use Traits\CommissionRateTrait;
    use Traits\DescriptionTrait;
    use Traits\StarredTrait;
    use Traits\OneSIdTrait;
    use Traits\PurchaseCostTrait;
    use Traits\IdTrait;

}