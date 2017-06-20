<?php

namespace pxgamer\PwnedApi\Data;

use pxgamer\PwnedApi\Calls;

/**
 * Class DataClasses
 * @package pxgamer\PwnedApi\Data
 */
class DataClasses
{
    /**
     * @var array
     */
    private $dataClasses = [];

    /**
     * @return $this
     */
    public function populate()
    {
        $oResponse = Calls::curlUrl(
            Calls::HTTP_MODE_GET,
            'dataclasses'
        );

        $aDataClasses = \GuzzleHttp\json_decode($oResponse->getBody());

        $this->dataClasses = array_merge($this->dataClasses, $aDataClasses);

        return $this;
    }
}