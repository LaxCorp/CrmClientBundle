<?php

namespace LaxCorp\CrmClientBundle\Model;

/**
 * @inheritdoc
 */
class Event extends CrmModel
{
    const MODULE = 'Events';

    use Traits\ActivityTypeTrait;
    use Traits\AssignedUserIdTrait;
    use Traits\ContactIdTrait;
    use Traits\CreatedTimeTrait;
    use Traits\CreatedUserIdTrait;
    use Traits\DateStartTrait;
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
    use Traits\SubjectTrait;
    use Traits\TagsTrait;
    use Traits\TaskPriorityTrait;
    use Traits\TimeEndTrait;
    use Traits\TimeStartTrait;
    use Traits\VisibilityTrait;

}