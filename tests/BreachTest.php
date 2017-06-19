<?php

use pxgamer\PwnedApi\Breaches;

class BreachTest extends \PHPUnit\Framework\TestCase
{
    public function testCanPopulateBreach()
    {
        $sBreachName = '000webhost';

        $oBreach = new Breaches\Breach($sBreachName);
        $oBreach->populateByBreachName();

        $this->assertObjectHasAttribute('title', $oBreach);
    }
}