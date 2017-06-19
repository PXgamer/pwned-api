<?php

namespace pxgamer\PwnedApi;

use GuzzleHttp\Client;

class Calls
{
    public static function curlUrl($sMode, $sUrl)
    {
        if (!$sUrl || !in_array($sMode, Config::AVAILABLE_HTTP_METHODS)) {
            return null;
        }

        $client = new Client([
            'base_uri' => Config::BASE_URL . 'v' . Config::CURRENT_API_VERSION . '/'
        ]);

        $res = $client->request($sMode, $sUrl);

        return $res;
    }
}