<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
interface CrmModelInterface
{

    public const MODULE = 'Crm api module name';

    /**
     * @return string
     */
    public function getId();
}