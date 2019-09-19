<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Model\VtigerInfo;

/**
 * @inheritdoc
 */
class CrmInfo extends Crm
{

    /**
     * @return VtigerInfo|null
     */
    public function getVersion()
    {
        return $this->fromArray($this->getApiClient()->getVtigerInfo(), VtigerInfo::class);
    }

}