<?php

namespace pxgamer\PwnedApi;

use GuzzleHttp\Client;

/**
 * Class Calls
 * @package pxgamer\PwnedApi
 */
class Calls
{
    const HTTP_MODE_GET = 'GET';
    const HTTP_MODE_POST = 'POST';
    const HTTP_MODE_PUT = 'PUT';
    const HTTP_MODE_DELETE = 'DELETE';

    /**
     * @var Client
     */
    public static $client;

    /**
     * @param string $sMode
     * @param $sUrl
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public static function curlUrl($sMode, $sUrl)
    {
        if (!$sUrl || !in_array($sMode, Config::AVAILABLE_HTTP_METHODS)) {
            return null;
        }

        if (!self::$client) {
            self::$client = new Client([
                'base_uri' => Config::BASE_URL . 'v' . Config::CURRENT_API_VERSION . '/'
            ]);
        }

        $res = self::$client->request($sMode, $sUrl);

        return $res;
    }
}