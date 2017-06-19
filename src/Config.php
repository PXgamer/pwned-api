<?php

namespace pxgamer\PwnedApi;

class Config
{
    const BASE_URL = 'https://haveibeenpwned.com/api/';
    const CURRENT_API_VERSION = 2;
    const AVAILABLE_HTTP_METHODS = ['GET'];

    private static $clientName = null;

    public static function setClientName($sClientName)
    {
        return (self::$clientName = $sClientName);
    }
}