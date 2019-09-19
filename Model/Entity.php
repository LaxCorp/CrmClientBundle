<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Entity
{

    use Traits\LabelTrait;
    use Traits\NameTrait;
    use Traits\CreateableTrait;
    use Traits\UpdateableTrait;
    use Traits\DeleteableTrait;
    use Traits\RetrieveableTrait;
    use Traits\FieldTrait;
    use Traits\IdPrefixTrait;
    use Traits\IsEntityTrait;
    use Traits\AllowDuplicatesTrait;
    use Traits\LabelFieldsTrait;

}