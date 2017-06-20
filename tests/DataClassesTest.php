<?php

use pxgamer\PwnedApi\Data;

class DataClassesTest extends \PHPUnit\Framework\TestCase
{
    public function testCanPopulateDataClasses()
    {
        $oDataClasses = new Data\DataClasses();
        $oDataClasses->populate();

        $this->assertObjectHasAttribute('dataClasses', $oDataClasses);
    }
}