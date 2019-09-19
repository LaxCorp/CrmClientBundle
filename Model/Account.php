<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Account extends CrmModel
{

    const MODULE = 'Accounts';

    use Traits\AccountNameTrait;
    use Traits\AccountNoTrait;
    use Traits\PhoneTrait;
    use Traits\WebsiteTrait;
    use Traits\FaxTrait;
    use Traits\TickerSymbolTrait;
    use Traits\OtherPhoneTrait;
    use Traits\AccountIdTrait;
    use Traits\Email1Trait;
    use Traits\EmployeesTrait;
    use Traits\Email2Trait;
    use Traits\OwnershipTrait;
    use Traits\RatingTrait;
    use Traits\IndustryTrait;
    use Traits\SicCodeTrait;
    use Traits\AccountTypeTrait;
    use Traits\AnnualRevenueTrait;
    use Traits\EmailOptOutTrait;
    use Traits\NotifyOwnerTrait;
    use Traits\AssignedUserIdTrait;
    use Traits\CreatedTimeTrait;
    use Traits\ModifiedTimeTrait;
    use Traits\ModifiedByTrait;
    use Traits\InnTrait;
    use Traits\KppTrait;
    use Traits\SpLastSmsTrait;
    use Traits\BillStreetTrait;
    use Traits\ShipStreetTrait;
    use Traits\BillCityTrait;
    use Traits\ShipCityTrait;
    use Traits\BillStateTrait;
    use Traits\ShipStateTrait;
    use Traits\BillCodeTrait;
    use Traits\ShipCodeTrait;
    use Traits\BillCountryTrait;
    use Traits\ShipCountryTrait;
    use Traits\BillPoboxTrait;
    use Traits\ShipPoboxTrait;
    use Traits\DescriptionTrait;
    use Traits\VkUrlTrait;
    use Traits\TwUrlTrait;
    use Traits\OneSIdTrait;
    use Traits\IsConvertedFromLeadTrait;
    use Traits\CreatedUserIdTrait;
    use Traits\SourceTrait;
    use Traits\StarredTrait;
    use Traits\TagsTrait;
    use Traits\IdTrait;

}