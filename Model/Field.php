<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Field
{

    use Traits\NameTrait;
    use Traits\LabelTrait;
    use Traits\MandatoryTrait;
    use Traits\TypeTrait;
    use Traits\IsuniqueTrait;
    use Traits\NullableTrait;
    use Traits\EditableTrait;
    use Traits\DefaultTrait;

}