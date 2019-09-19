<?php

namespace LaxCorp\CrmClientBundle\Util;

/**
 * @inheritdoc
 */
class DateUtil
{

    public const TZ = 'Etc/GMT-3';

    public const DATE_FORMAT = 'Y-m-d';

    public const TIME_FORMAT = 'H:i:s';

    public const JMS_DATE_TYPE =
        "DateTime <'" . self::DATE_FORMAT . "', '" . self::TZ . "'>";

    public const JMS_DATE_TIME_TYPE =
        "DateTime <'" . self::DATE_FORMAT . " " . self::TIME_FORMAT . "', '" . self::TZ . "'>";

    public const JMS_TIME_TYPE =
        "DateTime <'" . self::TIME_FORMAT . "''>";

    /**
     * @inheritdoc
     */
    static function joinDate(?string $date, ?string $time)
    {
        if (!$date || !$time) {
            return null;
        }

        try {
            return new \DateTime($date . ' ' . $time, new \DateTimeZone(self::TZ));
        } catch (\Exception $e) {
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    static function splitDate(?\DateTime $dateTime)
    {

        if (!$dateTime) {
            return null;
        }

        return [
            'date' => $dateTime->format(self::DATE_FORMAT),
            'time' => $dateTime->format(self::TIME_FORMAT)
        ];

    }

}
