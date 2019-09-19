<?php

namespace LaxCorp\CrmClientBundle\Helper;

/**
 * @inheritdoc
 */
abstract class CrmConst
{

    public const STATUS_NOT_STARTED = 'Not Started'; // Не начато
    public const STATUS_IN_PROGRESS = 'In Progress'; // В процессе
    public const STATUS_COMPLETED = 'Completed'; // Завершено
    public const STATUS_PENDING_INPUT = 'Pending Input'; // В ожидании
    public const STATUS_DEFERRED = 'Deferred'; // Отсрочено
    public const STATUS_PLANNED = 'Planned'; // запланировано

    public const PRIORITY_HIGH = 'High'; // Высокий
    public const PRIORITY_MEDIUM = 'Medium'; // Средний
    public const PRIORITY_LOW = 'Low'; // Низкий

    public const ACTIVITY_TYPE_TASK = 'Task';

}