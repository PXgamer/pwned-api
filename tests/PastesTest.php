<?php

namespace pxgamer\PwnedApi;

use PHPUnit\Framework\TestCase;

class PastesTest extends TestCase
{
    public $sTestName = 'test@example.com';

    public function testCanPopulateAccountFromName()
    {
        $oPaste = new Pastes\Account($this->sTestName);
        $oPaste->populateFromAccountName();

        $this->assertObjectHasAttribute('pastes', $oPaste);
    }
}
