<?php

namespace pxgamer\PwnedApi\Breaches;

use pxgamer\PwnedApi\Calls;
use pxgamer\PwnedApi\Model;

class Breach extends Model
{
    private $title;
    private $name;
    private $domain;
    private $breachDate;
    private $addedDate;
    private $modifiedDate;
    private $pwnCount;
    private $description;
    private $dataClasses;
    private $isVerified;
    private $isFabricated;
    private $isSensitive;
    private $isRetired;
    private $isSpamList;

    public function __construct($sBreachName = null)
    {
        if ($sBreachName) {
            $this->name = $sBreachName;
        }
    }

    public function populateByBreachName()
    {
        $oResponse = Calls::curlUrl(Calls::HTTP_MODE_GET, 'breach/' . $this->name);

        $oBody = \GuzzleHttp\json_decode($oResponse->getBody());

        $this->name = $oBody->Name ?? null;
        $this->title = $oBody->Title ?? null;
        $this->domain = $oBody->Domain ?? null;
        $this->breachDate = $oBody->BreachDate ?? null;
        $this->addedDate = $oBody->AddedDate ?? null;
        $this->modifiedDate = $oBody->ModifiedDate ?? null;
        $this->pwnCount = $oBody->PwnCount ?? null;
        $this->description = $oBody->Description ?? null;
        $this->dataClasses = $oBody->DataClasses ?? null;
        $this->isVerified = $oBody->IsVerified ?? null;
        $this->isFabricated = $oBody->IsFabricated ?? null;
        $this->isSensitive = $oBody->IsSensitive ?? null;
        $this->isRetired = $oBody->IsRetired ?? null;
        $this->isSpamList = $oBody->IsSpamList ?? null;
    }
}