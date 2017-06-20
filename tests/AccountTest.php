<?php

use pxgamer\PwnedApi\Breaches;

class AccountTest extends \PHPUnit\Framework\TestCase
{
    public function testCanPopulateAccountFromName()
    {
        $oBreaches = new Breaches\Account('test@example.com');
        $oBreaches->populateFromAccountName();

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }

    public function testCanPopulateAccountFromNameTruncated()
    {
        $oBreaches = new Breaches\Account('test@example.com');
        $oBreaches->populateFromAccountName(true);

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }
}