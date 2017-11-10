<?php

namespace pxgamer\PwnedApi;

use PHPUnit\Framework\TestCase;

class DataClassesTest extends TestCase
{
    public function testCanPopulateDataClasses()
    {
        $oDataClasses = new Data\DataClasses();
        $oDataClasses->populate();

        $this->assertObjectHasAttribute('dataClasses', $oDataClasses);
    }
}
