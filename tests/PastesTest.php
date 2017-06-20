<?php

use pxgamer\PwnedApi\Pastes;

class PastesTest extends \PHPUnit\Framework\TestCase
{
    public $sTestName = 'test@example.com';

    public function testCanPopulateAccountFromName()
    {
        $oPaste = new Pastes\Account($this->sTestName);
        $oPaste->populateFromAccountName();

        $this->assertObjectHasAttribute('pastes', $oPaste);
    }
}