<?php

namespace pxgamer\PwnedApi;

use PHPUnit\Framework\TestCase;

class BreachesTest extends TestCase
{
    public $sTestName = 'adobe.com';

    public function testCanPopulateBreachesWithoutDomain()
    {
        $oBreaches = new Breaches\Breaches();
        $oBreaches->populate();

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }

    public function testCanPopulateBreachesWithDomain()
    {
        $oBreaches = new Breaches\Breaches($this->sTestName);
        $oBreaches->populate();

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }
}
