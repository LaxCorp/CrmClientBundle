<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Exception\CrmClientException;
use Salaros\Vtiger\VTWSCLib\WSException;

/**
 * @inheritdoc
 */
class CrmModules extends Crm
{

    /**
     * @inheritdoc
     */
    public function modules()
    {

        $modules = $this->getApiClient()->modules->getAll();

        $result = [];

        foreach ($modules as $module) {
            $name = $module['name'];
            if ($name === 'Search' || $name === 'ProductTaxes') {
                continue;
            }

            try {
                $result[$name] = $this->getApiClient()->entities->findMany($module['name'], [], [], 100);
            } catch (WSException $exception) {
                throw new CrmClientException($exception);
            }
        }

        return $result;
    }


}