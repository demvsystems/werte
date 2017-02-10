<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.01.17
 * Time: 09:49
 */

namespace Demv\Werte\Tests\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Beruflich\BeruflicheBeziehung;
use PHPUnit\Framework\TestCase;

class BeruflicheBeziehungTest extends TestCase
{
    public function testIsFamiliaer()
    {
        $beziehung = new BeruflicheBeziehung(1, 'test');
        $this->assertFalse($beziehung->isFamiliaer());
    }

    public function testIsBeruflich()
    {
        $beziehung = new BeruflicheBeziehung(1, 'test');
        $this->assertTrue($beziehung->isBeruflich());
    }
}