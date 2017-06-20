<?php

use pxgamer\PwnedApi\Breaches;

class BreachTest extends \PHPUnit\Framework\TestCase
{
    public $sTestName = '000webhost';

    public function testCanPopulateBreach()
    {
        $oBreach = new Breaches\Breach($this->sTestName);
        $oBreach->populateByBreachName();

        $this->assertObjectHasAttribute('title', $oBreach);
    }
}