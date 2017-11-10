<?php

namespace pxgamer\PwnedApi\Breaches;

use pxgamer\PwnedApi\Calls;
use pxgamer\PwnedApi\Model;

/**
 * Class Account
 */
class Account extends Model
{
    /**
     * @var null
     */
    private $accountName;
    /**
     * @var array
     */
    private $breaches;

    /**
     * Account constructor.
     *
     * @param null $sAccountName
     */
    public function __construct($sAccountName = null)
    {
        if ($sAccountName) {
            $this->accountName = $sAccountName;
        }
    }

    /**
     * @param bool $bTruncateResults
     * @return $this
     */
    public function populateFromAccountName($bTruncateResults = false)
    {
        if (!$this->accountName) {
            return $this;
        }

        $oResponse = Calls::curlUrl(
            Calls::HTTP_MODE_GET,
            'breachedaccount/' . $this->accountName . ($bTruncateResults ? '?truncateResponse=true' : null)
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
    private function addBreach(Breach $oBreach)
    {
        if (!is_array($this->breaches)) {
            $this->breaches = [];
        }

        $this->breaches[] = $oBreach;

        return $this;
    }
}
