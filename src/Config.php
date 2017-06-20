<?php

namespace pxgamer\PwnedApi;

class Config
{
    const BASE_URL = 'https://haveibeenpwned.com/api/';
    const CURRENT_API_VERSION = 2;
    const AVAILABLE_HTTP_METHODS = [
        Calls::HTTP_MODE_GET
    ];

    private static $clientName = 'PwnedApi';

    public static function setClientName($sClientName)
    {
        return (self::$clientName = $sClientName);
    }

    public static function getClientName()
    {
        return self::$clientName;
    }
}