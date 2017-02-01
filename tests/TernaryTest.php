<?php

namespace Demv\Werte\Tests;

use Demv\Werte\Ternary;
use PHPUnit\Framework\TestCase;

class TernaryTest extends TestCase
{
    public function testUnknown()
    {
        $ternary = Ternary::unknown();
        $this->assertTrue($ternary->isUnknown());
        $this->assertFalse($ternary->isYes());
        $this->assertFalse($ternary->isNo());
    }

    public function testYes()
    {
        $ternary = Ternary::yes();
        $this->assertFalse($ternary->isUnknown());
        $this->assertTrue($ternary->isYes());
        $this->assertFalse($ternary->isNo());
    }

    public function testNo()
    {
        $ternary = Ternary::no();
        $this->assertFalse($ternary->isUnknown());
        $this->assertFalse($ternary->isYes());
        $this->assertTrue($ternary->isNo());
    }

    public function testInvert()
    {
        $this->assertTrue(Ternary::yes()->invert() === Ternary::no());
        $this->assertTrue(Ternary::no()->invert() === Ternary::yes());
        $this->assertTrue(Ternary::unknown()->invert() === Ternary::unknown());
    }
}