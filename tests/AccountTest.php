<?php

namespace pxgamer\PwnedApi;

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    public $sTestName = 'test@example.com';

    public function testCanPopulateAccountFromName()
    {
        $oBreaches = new Breaches\Account($this->sTestName);
        $oBreaches->populateFromAccountName();

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }

    public function testCanPopulateAccountFromNameTruncated()
    {
        $oBreaches = new Breaches\Account($this->sTestName);
        $oBreaches->populateFromAccountName(true);

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }
}
