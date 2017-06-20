<?php

use pxgamer\PwnedApi\Breaches;

class BreachesTest extends \PHPUnit\Framework\TestCase
{
    public function testCanPopulateBreachesWithoutDomain()
    {
        $oBreaches = new Breaches\Breaches();
        $oBreaches->populate();

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }

    public function testCanPopulateBreachesWithDomain()
    {
        $sBreachName = 'adobe.com';

        $oBreaches = new Breaches\Breaches($sBreachName);
        $oBreaches->populate();

        $this->assertObjectHasAttribute('breaches', $oBreaches);
    }
}