<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Consignment extends CrmModel
{

    const MODULE = 'Consignment';

    use Traits\ConsignmentNoTrait;
    use Traits\InvoiceIdTrait;
    use Traits\SalesOrderIdTrait;
    use Traits\ConsignmentDateTrait;
    use Traits\AssignedUserIdTrait;
    use Traits\AccountIdTrait;
    use Traits\CreatedTimeTrait;
    use Traits\ContactIdTrait;
    use Traits\ModifiedTimeTrait;
    use Traits\SpConsignmentStatusTrait;
    use Traits\TxtAdjustmentTrait;
    use Traits\HdnSubTotalTrait;
    use Traits\HdnGrandTotalTrait;
    use Traits\HdnTaxTypeTrait;
    use Traits\DiscountPercentTrait;
    use Traits\DiscountAmountTrait;
    use Traits\HdnSHAmountTrait;
    use Traits\CurrencyIdTrait;
    use Traits\ConversionRateTrait;
    use Traits\ModifiedByTrait;
    use Traits\SourceTrait;
    use Traits\TagsTrait;
    use Traits\CreatedUserIdTrait;
    use Traits\HasGoodsConsignmentTrait;
    use Traits\GoodsConsignmentNoTrait;
    use Traits\BillStreetTrait;
    use Traits\ShipStreetTrait;
    use Traits\BillPoboxTrait;
    use Traits\ShipPoboxTrait;
    use Traits\BillCityTrait;
    use Traits\ShipCityTrait;
    use Traits\BillStateTrait;
    use Traits\ShipStateTrait;
    use Traits\BillCodeTrait;
    use Traits\ShipCodeTrait;
    use Traits\BillCountryTrait;
    use Traits\ShipCountryTrait;
    use Traits\DescriptionTrait;
    use Traits\StarredTrait;
    use Traits\ProductIdTrait;
    use Traits\QuantityTrait;
    use Traits\ListPriceTrait;
    use Traits\CommentTrait;
    use Traits\Tax1Trait;
    use Traits\Tax2Trait;
    use Traits\Tax3Trait;
    use Traits\PreTaxTotalTrait;
    use Traits\HdnSHPercentTrait;
    use Traits\SpCompanyTrait;
    use Traits\ImageTrait;
    use Traits\PurchaseCostTrait;
    use Traits\MarginTrait;
    use Traits\RegionIdTrait;
    use Traits\SubjectTrait;
    use Traits\IdTrait;
    use Traits\LineItemTrait;

}