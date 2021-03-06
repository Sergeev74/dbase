<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace org\majkel\dbase;

use org\majkel\dbase\tests\utils\TestBase;

/**
 * Record class tests
 *
 * @author majkel
 *
 * @coversDefaultClass \org\majkel\dbase\Flags
 */
class FlagsTest extends TestBase {

    const CLS = '\org\majkel\dbase\Flags';

    /**
     * @covers ::flagEnabled
     * @covers ::enableFlag
     * @covers ::__construct
     */
    public function testEnableDisableFlag() {
        $flags = new Flags(2);
        /* @var $flags \org\majkel\dbase\Flags */
        self::assertTrue($flags->flagEnabled(2));
        $flags->enableFlag(1, true);
        self::assertTrue($flags->flagEnabled(1));
        $flags->enableFlag(1, false);
        self::assertFalse($flags->flagEnabled(1));
    }

}
