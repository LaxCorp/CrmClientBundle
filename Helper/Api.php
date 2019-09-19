<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Exception\CrmClientException;
use Salaros\Vtiger\VTWSCLib\WSClient;
use Salaros\Vtiger\VTWSCLib\WSException;

/**
 * @inheritdoc
 */
class Api
{

    /**
     * @var WSClient
     */
    public $client;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var string
     */
    private $siteUrl;

    /**
     * @var string
     */
    private $sourceName;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $accessKey;

    /**
     * @inheritdoc
     */
    public function __construct(

        string $apiUrl,
        string $siteUrl,
        string $sourceName,
        string $username,
        string $accessKey,
        bool $enabled
    ) {

        $this->apiUrl     = $apiUrl;
        $this->siteUrl    = $siteUrl;
        $this->sourceName = $sourceName;
        $this->username   = $username;
        $this->accessKey  = $accessKey;
        $this->setEnabled($enabled);
    }

    /**
     * @return WSClient
     */
    public function getClient()
    {
        try {
            return new WSClient($this->apiUrl, $this->username, $this->accessKey);
        } catch (WSException $exception) {
            throw new CrmClientException($exception);
        }
    }


    /**
     * @inheritdoc
     */
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @inheritdoc
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * @inheritdoc
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

}