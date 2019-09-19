<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Model\Account;

/**
 * @inheritdoc
 */
class CrmAccount extends Crm
{

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $account = new Account();

        return $account;
    }

    /**
     * @param string $id
     *
     * @return Account|null
     */
    public function getAccountById(string $id)
    {
        $params = [
            'id' => $id
        ];

        return $this->findOne(Account::class, $params);
    }

    /**
     * @param string $accountNo
     *
     * @return Account|null
     */
    public function getAccountByNo(string $accountNo)
    {
        $params = [
            'accountNo' => $accountNo
        ];

        return $this->findOne(Account::class, $params);
    }

    /**
     * @inheritdoc
     */
    public function getUrl(string $accountNo)
    {
        $parameters = [
            'crmSiteUrl' => $this->api->getSiteUrl()
        ];

        if (!$account = $this->getAccountByNo($accountNo)) {
            $parameters['accountNo'] = $accountNo;

            return $this->render('CrmClientBundle:url:account_search.txt.twig', $parameters);
        }

        $parameters['record'] = $this->api->getClient()->entities->getNumericID($account::MODULE, [
            'id' => $account->getId()
        ]);

        return $this->render('CrmClientBundle:url:account.txt.twig', $parameters);
    }

}