<?php

namespace pxgamer\PwnedApi\Breaches;

use pxgamer\PwnedApi\Calls;
use pxgamer\PwnedApi\Model;

/**
 * Class Breaches
 * @package pxgamer\PwnedApi\Breaches
 */
class Breaches extends Model
{
    /**
     * @var null
     */
    private $breachDomain;
    /**
     * @var array
     */
    private $breaches = [];

    /**
     * Breaches constructor.
     * @param null|string $sBreachDomain
     */
    public function __construct($sBreachDomain = null)
    {
        if ($sBreachDomain) {
            $this->breachDomain = $sBreachDomain;
        }
    }

    public function populate()
    {
        $oResponse = Calls::curlUrl(
            Calls::HTTP_MODE_GET,
            'breaches' . ($this->breachDomain ? '?domain=' . $this->breachDomain : null)
        );

        $aBody = \GuzzleHttp\json_decode($oResponse->getBody());

        foreach ($aBody as $oBreach) {
            $oBreachRecord = new Breach();
            $oBreachRecord->populateFields($oBreach);

            $this->addBreach($oBreachRecord);
        }

        return $this;
    }

    /**
     * @param Breach $oBreach
     *
     * @return $this
     */
    public function addBreach(Breach $oBreach)
    {
        if (!is_array($this->breaches)) {
            $this->breaches = [];
        }

        $this->breaches[] = $oBreach;

        return $this;
    }
}