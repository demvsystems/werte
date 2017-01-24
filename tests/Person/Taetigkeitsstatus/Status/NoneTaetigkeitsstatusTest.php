<?php
/**
 * Created by PhpStorm.
 * User: keno
 * Date: 24.01.17
 * Time: 09:44
 */

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus\Status;

use Demv\Werte\Person\Taetigkeitsstatus\Status\NoneTaetigkeisstatus;
use PHPUnit\Framework\TestCase;

/**
 * Class NoneTaetigkeitsstatusTest
 * @package Demv\Werte\Tests\Person\Taetigkeitsstatus\Status
 */
class NoneTaetigkeitsstatusTest extends TestCase
{
    public function testIsNone()
    {
        $none = new NoneTaetigkeisstatus();
        $this->assertTrue($none->isNone());
    }

    public function testIsSome()
    {
        $none = new NoneTaetigkeisstatus();
        $this->assertFalse($none->isSome());
    }

}