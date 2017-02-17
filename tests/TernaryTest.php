<?php

namespace Demv\Werte\Tests;

use Demv\Werte\Ternary;
use Exception;
use PHPUnit\Framework\TestCase;

class TernaryTest extends TestCase
{
    public function testUnknown()
    {
        $ternary = Ternary::unknown();
        $this->assertTrue($ternary->isUnknown());
        $this->assertFalse($ternary->isYes());
        $this->assertFalse($ternary->isNo());
        $this->assertEquals(Ternary::UNKNOWN, $ternary->getValue());
    }

    public function testYes()
    {
        $ternary = Ternary::yes();
        $this->assertFalse($ternary->isUnknown());
        $this->assertTrue($ternary->isYes());
        $this->assertFalse($ternary->isNo());
        $this->assertEquals(Ternary::YES, $ternary->getValue());
    }

    public function testNo()
    {
        $ternary = Ternary::no();
        $this->assertFalse($ternary->isUnknown());
        $this->assertFalse($ternary->isYes());
        $this->assertTrue($ternary->isNo());
        $this->assertEquals(Ternary::NO, $ternary->getValue());
    }

    public function testTranslate()
    {
        $this->assertEquals(Ternary::unknown(), Ternary::translate(Ternary::UNKNOWN));
        $this->assertEquals(Ternary::no(), Ternary::translate(Ternary::NO));
        $this->assertEquals(Ternary::yes(), Ternary::translate(Ternary::YES));
    }

    public function testAsBool()
    {
        $this->assertTrue(Ternary::yes()->asBool());
        $this->assertFalse(Ternary::no()->asBool());

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Der Zustand "Unbekannt" kann nicht als bool dargestellt werden');

        Ternary::unknown()->asBool();
    }
}