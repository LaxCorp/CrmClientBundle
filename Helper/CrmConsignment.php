<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Exception\CrmClientException;
use LaxCorp\CrmClientBundle\Model\Account;
use LaxCorp\CrmClientBundle\Model\Consignment;
use LaxCorp\CrmClientBundle\Model\LineItem;
use Salaros\Vtiger\VTWSCLib\WSException;

/**
 * @inheritdoc
 */
class CrmConsignment extends Crm
{

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $consignment = new Consignment();
        $consignment
            ->setSource($this->api->getSourceName())
            ->setCurrencyId('21x1');

        return $consignment;
    }

    /**
     * @param Account $account
     *
     * @return Consignment[]
     */
    public function getOurConsignments(Account $account)
    {
        $params = [
            'accountId' => $account->getId()
        ];

        $datas = $this->findManyArray(Consignment::class, $params);

        $result = [];

        if (is_iterable($datas)) {
            foreach ($datas as $data) {
                if (!$this->isApiSource($data)) {
                    continue;
                }

                $result[] = $this->fromArray($data, Consignment::class);
            }
        }

        return $result;
    }

    /**
     * @param string $id
     *
     * @return Consignment|null
     */
    public function getConsignment(?string $id)
    {
        if (null === $id) {
            return null;
        }

        $params = [
            'id' => $id
        ];

        return $this->findOne(Consignment::class, $params);
    }

    /**
     * @param Consignment $consignment
     *
     * @return Consignment
     * @throws CrmClientException
     */
    public function createConsignment(Consignment $consignment)
    {

        $this->create($consignment);

        return $consignment;
    }

    /**
     * @inheritdoc
     */
    public function updateConsignment(Consignment &$consignment)
    {
        try {
            $data = $this->getApiClient()->entities
                ->updateOne($consignment::MODULE, $consignment->getId(), $this->toArray($consignment));
        } catch (WSException $e) {
            throw new CrmClientException($e);
        }

        $consignment = $this->fromArray($data, get_class($consignment));
    }

}