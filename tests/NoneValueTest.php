<?php
/**
 * Created by PhpStorm.
 * User: Randy
 * Date: 20.01.2017
 * Time: 11:19
 */

namespace Demv\Werte\Tests;

use Demv\Werte\NoneValue;
use PHPUnit\Framework\TestCase;

class NoneValueTest extends TestCase
{
    public function testIsNone()
    {
        $none = new NoneValue();
        $this->assertTrue($none->isNone());
    }

    public function testIsSome()
    {
        $none = new NoneValue();
        $this->assertFalse($none->isSome());
    }
}