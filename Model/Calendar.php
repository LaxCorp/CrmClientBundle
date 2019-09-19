<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Calendar extends CrmModel
{
    const MODULE = 'Calendar';

    use Traits\ActivityTypeTrait;
    use Traits\AssignedUserIdTrait;
    use Traits\ContactIdTrait;
    use Traits\CreatedTimeTrait;
    use Traits\CreatedUserIdTrait;
    use Traits\DescriptionTrait;
    use Traits\DueDateTrait;
    use Traits\DurationHoursTrait;
    use Traits\DurationMinutesTrait;
    use Traits\EventStatusTrait;
    use Traits\IdTrait;
    use Traits\LocationTrait;
    use Traits\ModifiedByTrait;
    use Traits\ModifiedTimeTrait;
    use Traits\NoTimeTrait;
    use Traits\ParentIdTrait;
    use Traits\RecurringTypeTrait;
    use Traits\ReminderTime;
    use Traits\SendNotificationTrait;
    use Traits\SourceTrait;
    use Traits\StarredTrait;
    use Traits\StartAtTrait;
    use Traits\SubjectTrait;
    use Traits\TagsTrait;
    use Traits\TaskPriorityTrait;
    use Traits\TaskStatusTrait;
    use Traits\TimeEndTrait;
    use Traits\VisibilityTrait;

}