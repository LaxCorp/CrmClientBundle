<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Model\Calendar;

/**
 * @inheritdoc
 */
class CrmCalendar extends Crm
{

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $calendar = new Calendar();
        $calendar->setStartAt(new \DateTime());
        $calendar->setDueDate(new \DateTime());

        return $calendar;
    }

    /**
     * @param string $id
     *
     * @return Calendar|null
     */
    public function getCalendarById(string $id)
    {
        $params = [
            'id' => $id
        ];

        return $this->findOne(Calendar::class, $params);
    }

}