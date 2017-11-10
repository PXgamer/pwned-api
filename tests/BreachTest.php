<?php

namespace pxgamer\PwnedApi;

use PHPUnit\Framework\TestCase;

class BreachTest extends TestCase
{
    public $sTestName = '000webhost';

    public function testCanPopulateBreach()
    {
        $oBreach = new Breaches\Breach($this->sTestName);
        $oBreach->populateByBreachName();

        $this->assertObjectHasAttribute('title', $oBreach);
    }
}
