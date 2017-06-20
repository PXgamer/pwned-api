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
        $oResponse = Calls::curlUrl(
            Calls::HTTP_MODE_GET,
            'breach/' . $this->name
        );

        $oBreach = \GuzzleHttp\json_decode($oResponse->getBody());

        $this->populateFields($oBreach);

        return $this;
    }

    public function populateFields($oBreach)
    {
        $this->name = $oBreach->Name ?? null;
        $this->title = $oBreach->Title ?? null;
        $this->domain = $oBreach->Domain ?? null;
        $this->breachDate = $oBreach->BreachDate ?? null;
        $this->addedDate = $oBreach->AddedDate ?? null;
        $this->modifiedDate = $oBreach->ModifiedDate ?? null;
        $this->pwnCount = $oBreach->PwnCount ?? null;
        $this->description = $oBreach->Description ?? null;
        $this->dataClasses = $oBreach->DataClasses ?? null;
        $this->isVerified = $oBreach->IsVerified ?? null;
        $this->isFabricated = $oBreach->IsFabricated ?? null;
        $this->isSensitive = $oBreach->IsSensitive ?? null;
        $this->isRetired = $oBreach->IsRetired ?? null;
        $this->isSpamList = $oBreach->IsSpamList ?? null;

        return $this;
    }
}