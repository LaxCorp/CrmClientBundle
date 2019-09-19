<?php

namespace LaxCorp\CrmClientBundle\Helper;

use LaxCorp\CrmClientBundle\Model\Event;

/**
 * @inheritdoc
 */
class CrmEvent extends Crm
{

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $event = new Event();

        return $event;
    }

    /**
     * @param string $id
     *
     * @return Event|null
     */
    public function getEventById(string $id)
    {
        $params = [
            'id' => $id
        ];

        return $this->findOne(Event::class, $params);
    }

}