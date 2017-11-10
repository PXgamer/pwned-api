<?php

namespace pxgamer\PwnedApi\Pastes;

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
    private $pastes;

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
     * @return $this
     */
    public function populateFromAccountName()
    {
        if (!$this->accountName) {
            return $this;
        }

        $oResponse = Calls::curlUrl(
            Calls::HTTP_MODE_GET,
            'pasteaccount/' . $this->accountName
        );

        $aBody = \GuzzleHttp\json_decode($oResponse->getBody());

        foreach ($aBody as $oPaste) {
            $oPasteRecord = new Paste();
            $oPasteRecord->populateFields($oPaste);

            $this->addBreach($oPasteRecord);
        }

        return $this;
    }

    /**
     * @param Paste $oPaste
     *
     * @return $this
     */
    private function addBreach(Paste $oPaste)
    {
        if (!is_array($this->pastes)) {
            $this->pastes = [];
        }

        $this->pastes[] = $oPaste;

        return $this;
    }
}
