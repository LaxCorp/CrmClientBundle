<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Model\Service;

/**
 * @inheritdoc
 */
class CrmService extends Crm
{

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $service = new Service();
        $service
            ->setSource($this->api->getSourceName())
            ->setDiscontinued(1);

        return $service;
    }

    /**
     * @inheritdoc
     */
    public function composeServiceName(string $readableValue)
    {
        return $readableValue . ' ' . $this->api->getSourceName();
    }

    /**
     * @param string $serviceName
     *
     * @return Service|null
     */
    public function getServiceByName(string $serviceName)
    {
        $params = [
            'serviceName' => $serviceName
        ];

        return $this->findOne(Service::class, $params);
    }

}