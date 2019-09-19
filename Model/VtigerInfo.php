<?php

namespace LaxCorp\CrmClientBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
class VtigerInfo
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("vtiger")
     * @Serializer\Type("string")
     */
    private $vtiger;

    /**
     * @var string
     *
     * @Serializer\SerializedName("api")
     * @Serializer\Type("string")
     */
    private $api;

    /**
     * @return string
     */
    public function getVtiger(): string
    {
        return $this->vtiger;
    }

    /**
     * @param string $vtiger
     *
     * @return VtigerInfo
     */
    public function setVtiger(string $vtiger): VtigerInfo
    {
        $this->vtiger = $vtiger;

        return $this;
    }

    /**
     * @return string
     */
    public function getApi(): string
    {
        return $this->api;
    }

    /**
     * @param string $api
     *
     * @return VtigerInfo
     */
    public function setApi(string $api): VtigerInfo
    {
        $this->api = $api;

        return $this;
    }

}