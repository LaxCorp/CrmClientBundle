<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait EmployeesTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("employees")
     * @Serializer\Type("string")
     */
    private $employees;

    /**
     * @inheritdoc
     */
    public function getEmployees(): ?string
    {
        return $this->employees;
    }

    /**
     * @inheritdoc
     */
    public function setEmployees(?string $employees)
    {
        $this->employees = $employees;

        return $this;
    }

}