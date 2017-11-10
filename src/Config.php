<?php

namespace pxgamer\PwnedApi;

/**
 * Class Config
 */
class Config
{
    const BASE_URL = 'https://haveibeenpwned.com/api/';
    const CURRENT_API_VERSION = 2;
    const AVAILABLE_HTTP_METHODS = [
        Calls::HTTP_MODE_GET
    ];

    /**
     * @var string
     */
    private static $clientName = 'PwnedApi';

    /**
     * @param $sClientName
     * @return mixed
     */
    public static function setClientName($sClientName)
    {
        return (self::$clientName = $sClientName);
    }

    /**
     * @return string
     */
    public static function getClientName()
    {
        return self::$clientName;
    }
}
