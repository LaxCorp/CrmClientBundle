<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Exception\CrmClientException;
use LaxCorp\CrmClientBundle\Model\Entity;
use Salaros\Vtiger\VTWSCLib\WSException;

/**
 * @inheritdoc
 */
class CrmEntity extends Crm
{

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $entity = new Entity();

        return $entity;
    }

    /**
     * @param string $name
     *
     * @return Entity|null
     */
    public function getEntity(string $name)
    {
        $params = [
            'elementType' => $name
        ];

        try {
            $data = $this->api->getClient()->invokeOperation('describe', $params, 'GET');
        } catch (WSException $e) {
            throw new CrmClientException($e);
        }

        return $this->fromArray($data, Entity::class);
    }

}